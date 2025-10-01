
<?php
include('db.php'); // your db connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $bd->real_escape_string(trim($_POST['name'] ?? ''));
    $email = $bd->real_escape_string(trim($_POST['email'] ?? ''));
    $message = $bd->real_escape_string(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } else {
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($bd->query($sql) === TRUE) {
            echo "Message saved successfully!";
        } else {
            echo "Error: " . $bd->error;
        }
    }
} else {
    echo "Invalid request method.";
}
?>
