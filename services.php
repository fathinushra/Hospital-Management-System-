<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>
<!DOCTYPE html>
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
		NMS Hospitals - Services
		</title>
		<!--End of title-->
		
		<!--Style sheets css -->
		<link rel="stylesheet" href="css/design.css">
		<style>
.home1{
	height:100%;
	width:100%;
	border-radius:0px;
	position:relative;
	top:52.5px;
}
/* Style the container with a rounded border, grey background and some padding and margin */
.container {
    border: 2px solid #ccc;
    background-color: #eee;
    border-radius: 5px;
    padding: 16px;
    margin: 16px 0;
}

/* Clear floats after containers */
.container::after {
    content: "";
    clear: both;
    display: table;
}

/* Float images inside the container to the left. Add a right margin, and style the image as a circle */
.container img {
    float: left;
    margin-right: 20px;
    border-radius: 50%;
}

/* Increase the font-size of a span element */
.container span {
    font-size: 20px;
    margin-right: 15px;
}

/* Add media queries for responsiveness. This will center both the text and the image inside the container */
@media (max-width: 500px) {
  .container {
    text-align: center;
  }

  .container img {
    margin: auto;
    float: none;
    display: block;
  }
}
.footer {
	
    background: #0097a7;   /* footer background color */
    color: white;           /* text color */
    padding: 20px;          /* space inside footer */
    border-radius: 10px 10px 0 0; /* rounded top corners */
    text-align: center;     /* center text */
    width: 100%;            /* full width */
    font-size: 20px;
    position: relative;     /* normal flow, not fixed */
    margin-top: 30px;       /* space above footer */
}

.footer a {
    color: #ffeb3b;         /* link color */
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
}

.spaces{
	height:50px;
}
/* division design end*/

/* footer elements design*/
.footer a{
	color:black;
}
/* footer elements design end*/
</style>
		<!--End of css -->
		</head>
		<!--Body Start-->
	<body id="body" class="body">
			<!-- Navigation bar Start-->
			<div class="navbar" id="navbar">
			<ul class="menu" id="menu">		
				<li><a href="#home"><img src="icons/favicon.png" width="15px" height="15px" alt="Home-Logo"></a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="#body">Services</a></li>
				<li class="navspace" onclick="show()"><a href="#body"><img src="icons/user-2.png" style="width:15px; height:15px;"></a></li>
				
				
			</ul>
			</div>
			<!-- Navigation bar End-->
			<div class="admin-login" id="admin-login">
				<form action="login.php" method="post"><br>
				<label class="un">Admin-Username:</label><br/>
				<input type="text" name="username" id="username" placeholder="your username" required autocomplete="off"/><br/>
				<label class="pw">Admin-Password:</label><br/>
				<input type="password" name="password" id="password" placeholder="your password" required autocomplete="new-password"/><br/>
				<input type="submit" name="submit" value="login" id="submit"/>
				
				<input type="button" name="cancel" value="cancel" onclick="end()" id="btn_cancel"/>
				<p class="forgot"><a href="">...</a></p>
				</form>
			</div>
			<div class="home1" id="home1">
			<br>
			<div class="container">
			  <img src="img/s1.jpg" alt="pic1" style="width:90px">
			  <p><span>Medical Checkup</p></span>
			  <p></p>
			</div>

			<div class="container">
			  <img src="img/s2.jpg" alt="pic2" style="width:90px">
			  <p><span >All kinds of tests</p></span>
			  <p></p>
			</div>
			
			<div class="container">
			  <img src="img/s3.jpg" alt="pic3" style="width:90px">
			  <p><span>Specialists' Appointments</p></span>
			  <p></p>
			</div>
			
			<div class="container">
			  <img src="img/s4.jpg" alt="pic4" style="width:90px">
			  <p><span>Channelling</p></span>
			  <p></p>
			</div>
			
			<div class="container">
			  <img src="img/s5.jpg" alt="pic5" style="width:90px">
			  <p><span>Consultancy</p></span>
			  <p></p>
			</div>
			</div>
			<!--footer start-->
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="footer" id="footer" onclick="end()"><br>
	<h4>+ 94 0777123456 &bull; <a href="#contact">NMS Hospitals, Kurumankadu, Vavuniya, srilanka  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 08:00 am - 12:00 am<br>
	
	</div>
	<!--footer End-->
	<!--Java Script -->
	<script>
	</script>
	<script type="text/javascript" src="js/design.js">
	</script>
	<!-- End JavaScript-->
	</body>
	<!--End Body-->
</html>