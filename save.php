<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Secure random password generator
function createRandomPassword($length = 8) {
    $chars = 'abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789';
    $pass = '';
    for ($i = 0; $i < $length; $i++) {
        $pass .= $chars[random_int(0, strlen($chars) - 1)];
    }
    return $pass;
}
// Get POST data safely
$name = $_POST['name'] ?? '';
$nic = $_POST['nic'] ?? '';
$pid = $_POST['pid'] ?? '';   // <-- use the form input instead of random
$address = $_POST['address'] ?? '';
$gender = $_POST['gender'] ?? '';
$age = $_POST['age'] ?? '';
$phone = $_POST['phone'] ?? '';
$drid = $_POST['drid'] ?? '';
$report = $_POST['report'] ?? '';

// // Get POST data safely
// $name = $_POST['name'] ?? '';
// $nic = $_POST['nic'] ?? '';
// $pid = createRandomPassword();
// $address = $_POST['address'] ?? '';
// $gender = $_POST['gender'] ?? '';
// $age = $_POST['age'] ?? '';
// $phone = $_POST['phone'] ?? '';
// $drid = $_POST['drid'] ?? '';
// $report = $_POST['report'] ?? '';

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO register (name, nic, pid, address, gender, age, phone, drid, report) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $name, $nic, $pid, $address, $gender, $age, $phone, $drid, $report);

// Execute the statement
if ($stmt->execute()) {
    header("Location: print1.php?id=" . urlencode($pid));
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
