
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
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$doctor=$_POST['doctor'];
$sql = "INSERT INTO channel (name, age, gender, address, phone, date, time, doctor)VALUES('$name','$age','$gender','$address','$phone','$date','$time','$doctor')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("location: print.php?id=$name");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>