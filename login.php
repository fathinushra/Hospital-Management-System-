<?php
// Start session
session_start();

// Connect to MySQL server
require "db.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input using mysqli and prepared statements
    $login = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepare statement to prevent SQL injection
    $stmt = $bd->prepare("SELECT id, username, password FROM admin WHERE username = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $member = $result->fetch_assoc();

        // If you're storing hashed passwords, verify like this:
        // if (password_verify($password, $member['password'])) {
        if ($password === $member['password']) { // Plain text comparison (not recommended in production)
            session_regenerate_id();
            $_SESSION['SESS_MEMBER_ID'] = $member['id'];
            $_SESSION['SESS_FIRST_NAME'] = $member['username'];
            session_write_close();
            header("location: admin.php");
            exit();
        } else {
            // Wrong password
            header("location: index.php");
            exit();
        }
    } else {
        // User not found
        header("location: index.php");
        exit();
    }

    $stmt->close();
}
?>
