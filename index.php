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
		NMS Hospitals
		</title>
		<!--End of title-->
		
		<!--Style sheets css -->
		<link rel="stylesheet" href="css/design.css">
		<!--End of css -->
		<style>
  
  
.welcome-overlay {
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    z-index: 10;
}

.welcome-overlay h1 {
    font-size: 2.5em;
    margin-bottom: 0.3em;
    text-shadow: 2px 2px 4px #000;
}

.welcome-overlay p {
    font-size: 2em;
    margin-bottom: 1em;
    text-shadow: 1px 1px 3px #000;
	
}

.welcome-button {
    background-color: #28a745;
    color: white;
    padding: 15px 24px;
    text-decoration: none;
    font-size: 2em;
    border-radius: 5px;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
}

.welcome-button:hover {
    background-color: #218838;
}
.un{
    font-size:22px;
}

.pw{
    font-size:22px;
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
#submit, 
#btn_cancel {
    width: 100px;          /* button width */
    height: 35px;          /* button height */
    font-size: 20px; 

}

			</style>

		
	</head>
	
	<!--Body Start-->
	<body id="body" class="body">
			<!-- Navigation bar Start-->
			<div class="navbar" id="navbar">
			<ul class="menu" id="menu">		
				<li><a href="#home"><img src="icons/favicon.png" width="20px" height="20px" alt="Home-Logo"></a></li>
				<li><a href="#body">Home</a></li>
				<li><a href="services.php">Our Services</a></li>
                <li><a href="aboutus.php">About Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="search.php">Doctor Appointment</a></li>
				<li><a href="report.php">Lab Report</a></li>
				<li class="navspace" onclick="show()"><a href="#body"><img src="icons/user-2.png" style="width:40px; height:40px;"></a></li>
				
				
			</ul>
			</div>
			<!-- Navigation bar End-->

			<div class="admin-login" id="admin-login">
    <form action="login.php" method="post"><br><br><br>
        <label class="un">Admin-Username:</label><br/>
        <input type="text" name="username" id="username"placeholder="your username"required autocomplete="off"/><br/>
        <label class="pw">Admin-Password:</label><br/>
        <input type="password" name="password" id="password" placeholder="your password" required autocomplete="new-password"/><br/>
        <input type="submit" name="submit" value="login" id="submit">
        
        <input type="button" name="cancel" value="cancel" onclick="end()" id="btn_cancel">
        <!-- DISPLAY SUCCESS OR ERROR MESSAGE -->
        <?php
       
$success_message = $_SESSION['login_success'] ?? '';
        $error_message = $_SESSION['login_error'] ?? '';
        unset($_SESSION['login_success'], $_SESSION['login_error']);
        if($success_message != ''): ?>
            <p class="forgot" style="color:green; font-weight:bold;">
                <?php echo $success_message; ?>
            </p>
        <?php elseif($error_message != ''): ?>
            <p class="forgot" style="color:red; font-weight:bold;">
                <?php echo $error_message; ?> &bull; <a href="">Forgot your password?</a>
            </p>
        <?php else: ?>
            <p class="forgot"><a href="">...
        <?php endif; ?>
    </form>
</div>
         
			<!-- <div class="admin-login" id="admin-login">
				<form action="login.php" method="post"><br>
				<label class="un">Admin-Username:</label><br/>
				<input type="text" name="username" id="username" required/><br/>
				<label class="pw">Admin-Password:</label><br/>
				<input type="password" name="password" id="password" placeholder="your password" required/><br/>
				<input type="submit" name="submit" value="login" id="submit"/>
				
				<input type="button" name="cancel" value="cancel" onclick="end()" id="btn_cancel"/>
				<p class="forgot"><a href="">Forgot your password?</a></p>
				</form>
			</div> -->
		<!-- Home Section Start-->
		<div class="home" id="home" onclick="end()">
		<br>
			<!--Slide Show Start-->
				<div class="slideshow-container" id="slideshow-container">
					  <div class="mySlides fade" style="width:100%;height:100%;border-radius:0%">
						<img src="img/i1.jpg" style="width:200%;height:180%;border-radius:0%;background-size:cover">
					  </div>

					  <div class="mySlides fade" style="width:100%;height:100%;border-radius:0%">
						<img src="img/i2.jpg" style="width:200%;height:180%;border-radius:0%">
					  </div>

					  <div class="mySlides fade" style="width:100%;height:100%;border-radius:0%">
						<img src="img/i3.jpg" style="width:200%;height:180%;border-radius:0%">
					  </div>
					  
					  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					  <a class="next" onclick="plusSlides(1)">&#10095;</a>
				<br>
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
                
					<div class="welcome-overlay">
    <h1>Welcome to NMS Hospitals</h1>
    <p>Your trusted partner in diagnostics</p>
    <a href="search.php" class="welcome-button">Make an Appointment</a>

</div>
				</div>
			<!--Slide Show End-->
		</div>
		<!--Home End-->
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
	<!--footer start-->
	<div class="footer" id="footer" onclick="end()">
		<footer >
	<h4>+ 94 0777123456 &bull; <a href="#contact">NMS Hospitals, Kurumankadu, Vavuniya, srilanka  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 08:00 am - 12:00 am<br>
		</footer>
	</div>
	<!--footer End-->
	<!--Java Script -->
	<script type="text/javascript" src="js/design.js">
	</script>
	<!-- End JavaScript-->
	</body>
	<!--End Body-->
</html>