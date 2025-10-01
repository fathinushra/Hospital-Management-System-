<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<style type="text/css">
<!---->
/* .ed{
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
padding:5px;
background-color:#00CCFF;
height: 34px;
} */
<!---->
/* Body */

body {
    margin: 0;
    padding: 0;
    background-image: url("../images/india.jpg"); /* path to your image */
    background-size: cover;       /* make it cover the whole screen */
    background-repeat: no-repeat; /* prevent repeating */
    background-attachment: fixed; /* keep it fixed when scrolling */
    background-position: center;  /* center the image */
    font-family: Arial, sans-serif;
}

Input fields (your .ed class)
 .ed {
    width: 80%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 14px;
    outline: none;
    transition: 0.3s;
    display: block;
    box-sizing: border-box;
}
.ed:focus {
    border-color: #0097a7;
    box-shadow: 0 0 6px rgba(0,151,167,0.3);
}

/* Button (your #button1 id) */
#button1 {
    width: 100%;
    padding: 12px;
    background: #0097a7;
    border: none;
    border-radius: 10px;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s;
}
#button1:hover {
    background: #007c8c;
} */


 .container {
    display: flex;
    justify-content: center; /* horizontal center */
     align-items: center;     /* vertical center */
     height: 100vh;           /* full screen height */
     margin: 0;
    padding: 0; 
}
/* Style reset & submit buttons like other inputs */
 .package {
    background: rgba(255, 255, 255, 0.95);
    padding: 20px 25px;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 440px;
	align-items:center;
} 


/* Apply styling to all inputs, selects, file uploads, buttons inside .package */
.package input,
.package select,
.package textarea,
.package button {
    width:100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 14px;
    outline: none;
    box-sizing: border-box;
    transition: 0.3s;
    display: block;

}

.package input:focus,
.package select:focus,
.package textarea:focus,
.package button:focus {
    border-color: #0097a7;
    box-shadow: 0 0 6px rgba(0,151,167,0.3);
}

.package input[type="submit"],
.package input[type="reset"],
.package button {
    background: #0097a7;
    color: #0e0404ff;
    border: none;
    cursor: pointer;
	font-size:15px;
}

.package input[type="submit"]:hover,
.package input[type="reset"]:hover,
.package button:hover {
    background: #007c8c;
}


/* Form card (your .package class) */
.package {
	background: rgba(255, 255, 255, 0.95);
    padding: 190px 50px;
	padding-top:
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    width: 70%;
    max-width: 440px;
	
	
    
}
.package h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #0097a7;
}

/* Select dropdowns */
.package select {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 14px;
    outline: none;
    transition: 0.3s;
    display: block;
}
.package select:focus {
    border-color: #0097a7;
    box-shadow: 0 0 6px rgba(0,151,167,0.3);
}

/* Footer */

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
		<title>
		NMS Hospitals - Admin
		</title>
		<!--End of title-->
		
		<!--Style sheets css -->
		<link rel="stylesheet" href="css/admin.css">
		<!--End of css -->
	</head>
	<!--body start-->
	<body id="body">
			<!-- Navigation bar Start-->
			<div class="navbar" id="navbar">
			<ul class="menu" id="menu">
				<li><a href="#body"><img src="icons/favicon.png" width="15px" height="15px" alt="Home-Logo"></a></li>
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
			<!-- <div class="container" id="container" onclick="end()">
				<div class="package" id="package">
				<form action="save.php" method="post" enctype="multipart/form-data">
				 <h2> Patient Registration Form </h2>
					<input type="text" placeholder="name" name="name" class="ed" required >
					<input type="text" placeholder="N.I.C Number" name="nic" class="ed"  required>
					<input type="text" placeholder="Patient-ID will be created" name="pid" class="ed"  readonly>
					<input type="text" placeholder="patient address" name="address" class="ed" required >
                    Gender</br><select name="gender" class="ed">
                        <option name="Male" >Male </option>
                        <option name="Female" >Female </option>
                        <option name="Other" >Other </option>
					</select>
					<input type="number" placeholder="Age" name="age" class="ed" required>
					<input type="number" placeholder="phone" name="phone" class="ed" required>
					Consultant</br><select name="drid" class="ed">
					<?php
include('db.php'); // Make sure this defines $conn as a mysqli connection

$sql = "SELECT id, name, area FROM consultant";
$result = $bd->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($row['id']) . '">';
        echo htmlspecialchars($row['name']) . ' : ' . htmlspecialchars($row['area']);
        echo '</option>';
    }
} else {
    echo '<option value="">No consultants found</option>';
}
?>

					</select>
					</br>Report file</br>
					<input type="file" placeholder="report" name="report" class="ed" required>
					<input type="reset" value="Reset" class="ed">
					<input type="submit" value="Submit" class="ed">

				</form>
				</div>
			</div> -->

			<div class="container" id="container">
    <div class="package" id="package">
        <form action="save.php" method="post" enctype="multipart/form-data">
            <h2>Patient Registration Form</h2>

            <!-- Text inputs -->
            <input type="text" placeholder="Name" name="name" class="ed" required>
            <input type="text" placeholder="N.I.C Number" name="nic" class="ed" required>
            <input type="text" placeholder="Patient-ID will be created" name="pid" class="ed">

            <!-- <input type="text" placeholder="Patient-ID will be created" name="pid" class="ed" readonly> -->
            <input type="text" placeholder="Patient Address" name="address" class="ed" required>

            <!-- Gender select -->
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="ed" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <!-- Number inputs -->
            <input type="number" placeholder="Age" name="age" class="ed" required>
            <input type="number" placeholder="Phone" name="phone" class="ed" required>

            <!-- Consultant select -->
            <label for="drid">Consultant</label>
            <select name="drid" id="drid" class="ed" required>
                <?php
                include('db.php');
                $sql = "SELECT id, name, area FROM consultant";
                $result = $bd->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . htmlspecialchars($row['id']) . '">';
                        echo htmlspecialchars($row['name']) . ' : ' . htmlspecialchars($row['area']);
                        echo '</option>';
                    }
                } else {
                    echo '<option value="">No consultants found</option>';
                }
                ?>
            </select>

            <!-- File upload -->
            <label for="report">Report File</label>
            <input type="file" name="report" id="report" class="ed" required>

            <!-- Buttons -->
            
            <input type="submit" value="Submit">
			<input type="reset" value="Reset">
        </form>
    </div>
</div>
		
			
			<!--container division end-->
	
	<div class="footer" id="footer" onclick="end()">
	<h4>+ 94 0777123456 &bull; <a href="#contact">NMS Hospitals, Kurumankadu, Vavuniya, srilanka  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 08:00 am - 12:00 am<br>
	
	</div>
	
	<!--Java Script -->
	<script type="text/javascript" src="js/admin.js">
	</script>
	<!-- End JavaScript-->
	</body>
	<!--End Body-->
</html>