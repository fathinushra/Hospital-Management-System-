<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NMS Hospitals - Appointment</title>
    
    <!-- Internal CSS goes here -->
    <style>
    /* Container */
    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        font-family: Arial, sans-serif;
        color: #333;
    }

    /* Header */
    .header {
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        color: #1087a5ff;
        margin-bottom: 20px;
        font-weight: bold;

    }

    /* Appointment content */
    .appointment-details {
        line-height: 1.6;
        font-size: 20px;
        color: #555;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background: #f9f9f9;
    }

    /* Buttons */
    .btn {
        display: inline-block;
        padding: 10px 25px;
        margin: 10px 5px 0 0;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-print {
        background-color: #28a745;
        color: #110202ff;

    }

    .btn-print:hover {
        background-color: #218838;
    }

    .btn-home {
        background-color: #0c7da0ff;
        color: #fff;
    }

    .btn-home:hover {
        background-color: #4ad0e2ff;
    }
    </style>

</head>
<body>


<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>NMS Hospitals</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

<div class="container">
    <div class="header">
      Print and confirm the details before the Consulting</div><br><br>
<a href="javascript:Clickheretoprint()"class="btn btn-print">Print</a><br><br><br>
<div id="print_content"class="appointment-details">
    <center>
<strong>Doctor Appointment Details</strong>
</center><br>
<?php
include('db.php');

$id = $_GET['id'] ?? '';

// Only proceed if the ID is provided
if (!empty($id)) {
    // Prepare the SQL statement
    $stmt = $bd->prepare("SELECT * FROM channel WHERE name = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch and display data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo 'Appointment ID: ' . htmlspecialchars($row['id']) . '<br>';
            echo 'Name: ' . htmlspecialchars($row['name']) . '<br>';
            echo 'Age: ' . htmlspecialchars($row['age']) . '<br>';
            echo 'Gender: ' . htmlspecialchars($row['gender']) . '<br>';
            echo 'Address: ' . htmlspecialchars($row['address']) . '<br>';
            echo 'Phone: ' . htmlspecialchars($row['phone']) . '<br>';
            echo 'Date: ' . htmlspecialchars($row['date']) . '<br>';
            echo 'Time: ' . htmlspecialchars($row['time']) . '<br>';
            echo 'Doctor: ' . htmlspecialchars($row['doctor']) . '<br>';
        }
    } else {
        echo "No appointment found for the name: " . htmlspecialchars($id);
    }

    $stmt->close();
} else {
    echo "Name ID is required.";
}
?>

</div>
<a href="index.php"class="btn btn-home">Home</a>
</div>
</body>
</html>