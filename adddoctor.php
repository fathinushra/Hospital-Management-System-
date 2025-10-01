
<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="ISO-8859-1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>NMS Hospitals - Admin</title>
	<link rel="shortcut icon" href="icons/favicon.png"/>
	<link rel="stylesheet" href="css/admin.css">
	<style>
		body {
    margin: 0;
    padding: 0;
    background-image:url("../img/i1.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    font-family: Arial, sans-serif;
}

		
		.doc {
			background: #ffffff;
			padding: 40px;
			border-radius: 15px;
			box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
			width: 100%;
			max-width: 500px;
			margin: 50px auto;
		}
		.doc h2 {
			text-align: center;
			margin-bottom: 20px;
			color: #1c9da1ff;
			font-size: 22px;
		}
		.doc input, .doc textarea {
			width: 100%;
			padding: 12px;
			margin-bottom: 15px;
			border: 1px solid #ddd;
			border-radius: 8px;
			font-size: 15px;
			transition: all 0.3s ease;
		}
		.doc input:focus, .doc textarea:focus {
			border-color: #0dd6ccff;
			box-shadow: 0 0 5px rgba(13, 158, 216, 0.5);
			outline: none;
		}
		.doc input[type="submit"], .doc input[type="reset"] {
			width: 100%;
			padding: 12px;
			border: none;
			border-radius: 8px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: all 0.3s ease;
			margin-top: 5px;
		}
		.doc input[type="submit"] {
			background: #15889cff;
			color: #fff;
		}
		.doc input[type="submit"]:hover {
			background: #00a589ff;
		}
		.doc input[type="reset"] {
			background: #f1f1f1;
			color: #333;
		}
		.doc input[type="reset"]:hover {
			background: #ddd;
		}
		.footer {
			background: #0097a7;
			color: white;
			padding: 20px;
			text-align: center;
			position: fixed;
			bottom: 0;
			left: 0;
			width: 100%; 
			font-size: 20px;
		}
		.footer a {
			color: #ffeb3b;
			text-decoration: none;
		}
		.footer a:hover {
			text-decoration: underline;
		}

		/* Success pop-up message */
		.success-msg {
			display: none; /* hidden by default */
			position: fixed;
			top: 20px;
			left: 50%;
			transform: translateX(-50%);
			background-color: #439cc5ff; 
			color: white;
			padding: 40px 40px;
			border-radius: 8px;
			font-size: 16px;
			font-weight: bold;
			box-shadow: 0 5px 15px rgba(0,0,0,0.3);
			z-index: 1000;
			animation: fadeInOut 4s forwards;
		}

		@keyframes fadeInOut {
			0% {opacity: 0; transform: translateX(-50%) translateY(-20px);}
			10% {opacity: 1; transform: translateX(-50%) translateY(0);}
			90% {opacity: 1; transform: translateX(-50%) translateY(0);}
			100% {opacity: 0; transform: translateX(-50%) translateY(-20px);}
		}
		

	</style>
</head>

<body id="body">

	<div class="navbar" id="navbar">
		<ul class="menu" id="menu">
			<li><a href="#body"><img src="icons/favicon.png" width="15px" height="15px" alt="Home-Logo"></a></li>
			<li><a href="admin.php">Booking Details</a></li>
			<li><a href="register.php">Patient Registration</a></li>
			<li><a href="adddoctor.php">Add Doctor</a></li>
			<li class="navspace" onclick="show()"><a href="#body"><img src="icons/user-2.png" style="width:15px; height:15px;"></a></li>
		</ul>
	</div>
    
	<div class="admin-logout" id="admin-logout">
		<img src="icons/user-2.png" style="width:35px; height:35px;"><br/>
		<a href="index.php"><input type="button" name="logout" value="Logout"></a>
	</div>	  

	<div class="container" id="container">
		<div class="doc" id="doc">
			<!-- Success message -->
			<?php if (isset($_GET['success'])): ?>
				<div class="success-msg">Doctor added successfully!</div>
				<script>
					document.querySelector('.success-msg').style.display = 'block';
				</script>
			<?php endif; ?>

			<form action="save1.php" method="post" enctype="multipart/form-data">
				<h2>Add Doctor</h2>
				<input type="text" name="name" placeholder="Doctor's Name" required>
				<input type="text" name="area" placeholder="Specialized Area" required>
				<input type="text" name="phone" placeholder="Phone Number" required>
				<input type="number" name="experience" placeholder="Years of Experience">
				<input type="text" name="qualification" placeholder="Qualifications (MBBS, MD, etc)">
				<textarea name="bio" rows="3" placeholder="Short Bio / Notes"></textarea>
				
				<label>Available Time:</label>
				<input type="time" name="time_from"> to 
				<input type="time" name="time_to">

				<label>Available Dates:</label>
				<input type="date" name="date_from"> to 
				<input type="date" name="date_to">

				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
			</form>
		</div>
	</div>

	<center>
		<div class="footer" id="footer">
			<h4>+94 0777123456 &bull; <a href="#contact">NMS Hospitals, Kurumankadu, Vavuniya, Sri Lanka</a></h4>
			<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 08:00 am - 12:00 am</p>
		</div>
	</center>

	<script type="text/javascript" src="js/admin.js">
		</script>

	
</body>
</html>


















































