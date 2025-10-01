<?php
	require_once('auth.php');
	include('db.php');

//  Handle delete request before showing the page
if (isset($_POST['delete'])) {
    $delete_id = intval($_POST['delete_id']); // sanitize

    $stmt = $bd->prepare("DELETE FROM channel WHERE id = ?");
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting record');</script>";
    }

    $stmt->close();
}

//  Fetch records after handling delete
$result = $bd->query("SELECT * FROM channel");
?>
<!DOCTYPE html>
<style type="text/css">
<!---->


body {
    margin: 0;
    padding: 0;
    /* background-image: url("../images/india.jpg"); path to your image */
    background-size: cover;       /* make it cover the whole screen */
    background-repeat: no-repeat; /* prevent repeating */
    background-attachment: fixed; /* keep it fixed when scrolling */
    background-position: center;  /* center the image */
    font-family: Arial, sans-serif;
}


.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:3px;
background-color:#00CCFF;
height: 30px;
}



.footer {
    background: #0097a7;
    color: white;
    padding: 20px;
    margin-top: 30px;
    border-radius: 10px 10px 0 0;
    text-align: center;
    border-radius: 10px 10px 0 0;
    position: fixed;   /* stay fixed */
    bottom: 0;         /* at bottom */
    left: 0;
    width: 100%; 
	font-size:20px;
}
.footer a {
    color: #ffeb3b;
    text-decoration: none;
}
.footer a:hover {
    text-decoration: underline;
}
/* Booking details table */
.booking-table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 16px;
    text-align: center;   /* center all data */
    background: #ffffffcc; /* semi-transparent background */
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    border-radius: 10px;
    overflow: hidden;
}

.booking-table th {
    background: #0097a7;
    color: white;
    padding: 12px;
    font-size: 18px;
}

.booking-table td {
    padding: 10px;
    border: 1px solid #ddd;
}

.booking-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.booking-table tr:hover {
    background-color: #e0f7fa;
    transition: 0.3s;
}

.booking-table caption {
    caption-side: top;
    margin-bottom: 10px;
    font-size: 22px;
    font-weight: bold;
    color: #0097a7;
}

<!---->
</style>

<html lang="en-us">
	<head>
		<!--Responsive Web Design start-->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<!--Responsive Web Design end-->
		
		<!--charset start-->
		 <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1"> 
		<!--charset end-->
		
		<!--Title Icon start-->
		<link rel="shortcut icon" href="icons/favicon.png"/>
		<!--Title Icon end-->
		
		<!-- title of the page-->
		
  <title>NMS Hospital -admin</title>
  <link rel="stylesheet" href="css/admin.css">


		
	</head>
	<!--body start-->
	<body id="body">
			<!-- Navigation bar Start-->
			<div class="navbar" id="navbar">
			<ul class="menu" id="menu">
				<li><a href="#body"><img src="icons/favicon.png" width="19px" height="19px" alt="Home-Logo"></a></li>
				<li><a href="admin.php">Booking Details</a></li>
				<li><a href="register.php">Patient Registration</a></li>
				<li><a href="adddoctor.php">Add Doctor</a></li>
				<li class="navspace" onclick="show()"><a href="#body"><img src="icons/user-2.png" style="width:15px; height:15px;"></a></li>
			</ul>
			</div>
			<!-- Navigation bar End-->
			<div class="admin-logout" id="admin-logout">
			<img src="icons/user-2.png" style="width:35px; height:35px;"><br/>
			<a href="index.php"><input type="button" name="logout" value="Logout"></a>
			</div>	
			<!-- container division start-->
			<div class="container" id="container" onclick="end()"><br><br>
			<h1><center><caption>Patient Booking Details</caption></center></h1>
			<table class="booking-table">

			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Date</th>
			<th>Time</th>
			<th>Doctor ID</th>
			<th>Delete Ditails</th>
			</tr>
						<?php
include('db.php');

// Execute the query
$result = $bd->query("SELECT * FROM channel");

// Check if query was successful
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['name']) . '</td>';
        echo '<td>' . htmlspecialchars($row['age']) . '</td>';
        echo '<td>' . htmlspecialchars($row['gender']) . '</td>';
        echo '<td>' . htmlspecialchars($row['address']) . '</td>';
        echo '<td>' . htmlspecialchars($row['phone']) . '</td>';
        echo '<td>' . htmlspecialchars($row['date']) . '</td>';
        echo '<td>' . htmlspecialchars($row['time']) . '</td>';
        echo '<td>' . htmlspecialchars($row['doctor']) . '</td>';

		echo '<td>
                        <form method="post" action="">
                            <input type="hidden" name="delete_id" value="' . $row['id'] . '">
                            <input type="submit" name="delete" value="Delete" onclick="return confirm(\'Are you sure you want to delete this patient?\')">
                        </form>
                      </td>';
                echo '</tr>';
            
    }
} else {
    echo '<tr><td colspan="9">No records found.</td></tr>';
}
?>
			</table>
			</div>
			<!--container division end-->
	<center>
	<div class="footer" id="footer" onclick="end()">
	<h4>+ 94 0777123456 &bull; <a href="#contact">NMS Hospitals, Kurumankadu, Vavuniya, srilanka  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 08:00 am - 12:00 am<br>
	
	</div>
	</center>
	<!--Java Script -->
	<script type="text/javascript" src="js/admin.js">
	</script>
	<!-- End JavaScript-->
	</body>
	<!--End Body-->
</html>