
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

// Get POST data safely
$name         = $_POST['name'] ?? '';
$area         = $_POST['area'] ?? '';
$phone        = $_POST['phone'] ?? '';
$experience   = $_POST['experience'] ?? '';
$qualification= $_POST['qualification'] ?? '';
$bio          = $_POST['bio'] ?? '';
$time_from    = $_POST['time_from'] ?? '';
$time_to      = $_POST['time_to'] ?? '';
$date_from    = $_POST['date_from'] ?? '';
$date_to      = $_POST['date_to'] ?? '';

// Handle image upload
$photo = null;
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = "uploads/doctors/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create folder if not exists
    }

    $fileName = time() . "_" . basename($_FILES['photo']['name']);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
        $photo = $targetFile;
    }
}

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO consultant 
    (name, area, phone, experience, qualification, bio, time_from, time_to, date_from, date_to, photo) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "ssssissssss", 
    $name, $area, $phone, $experience, $qualification, $bio, 
    $time_from, $time_to, $date_from, $date_to, $photo
);

// Execute the statement
if ($stmt->execute()) {
    // Redirect back to adddoctor.php with success message
    header("Location: adddoctor.php?success=1");
    exit();
} else {
    echo "Error: " . $stmt->error;
}



$stmt->close();
$conn->close();
?>
