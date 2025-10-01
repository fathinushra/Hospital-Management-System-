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
		NMS Hospitals - Get Lab Report
		</title>
		<style>
			/* REPORT FORM CONTAINER */
	#body {
    margin: 0;
    width: 100%;
    min-height: 100vh;
    background-image: url("img/india.png"); /* adjust path if needed */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

	
#container {
    max-width: 500px;                     
    margin: 50px auto;                     
    padding: 30px;                         
    background: linear-gradient(145deg, #ffffff, #e6f2ff); 
    border-radius: 20px;                   
    box-shadow: 0 8px 25px rgba(0,0,0,0.2); 
    font-family: Arial, sans-serif;
    margin-bottom: 120px; /* creates space for footer */
}



/* FORM LABELS */
#container label {
    font-weight: bold;
    color: #333;
    display: block;
    margin-top: 15px;
}

/* TEXT INPUT */
#container input[type="text"] {
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    border-radius: 10px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* SUBMIT BUTTON */
#container #btncancel {
    width: 100%;
    padding: 15px;
    margin-top: 20px;
    font-weight: bold;
    font-size: 16px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    color: white;
    background: linear-gradient(45deg, #2694afff, #1f9ab9ff);
    transition: 0.3s;
}

#container #btncancel:hover {
    background: linear-gradient(45deg, #67e3e7ff, #7ec9f5ff);
    transform: scale(1.05);
}

/* REPORT RESULT BOX */
#container #report_result {
    margin-top: 25px;
    padding: 20px;
    background: #ffffff;
    border: 2px solid #3396e7ff;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    line-height: 1.6;
    font-size: 14px;
}

/* LINKS: View Report & Index */
#container .button-links {
    margin-top: 20px;
    text-align: center;
}

#container .button-links a {
    display: inline-block;
    margin: 10px 8px;
    padding: 12px 25px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 12px;
    color: white;
    transition: 0.3s;
}

/* VIEW REPORT BUTTON */
#container .button-links a[href^="reports/"] {
    background: linear-gradient(45deg, #1effa9ff, #00ff55ff);
}
#container .button-links a[href^="reports/"]:hover {
    background: linear-gradient(45deg, #00ff80ff, #1eff96ff);
    transform: scale(1.05);
}

/* INDEX BUTTON */
#container .button-links a[href="index.php"] {
    background: linear-gradient(45deg, #ff8c00, #ffa500);
}
#container .button-links a[href="index.php"]:hover {
    background: linear-gradient(45deg, #ffa500, #ff8c00);
    transform: scale(1.05);
}

/* RESPONSIVE */
@media (max-width: 600px) {
    #container {
        width: 90%;
        padding: 20px;
    }
    #container .button-links a {
        padding: 10px 20px;
        font-size: 14px;
    }
}
.footer {
    background: #078796ff;     /* footer background color */
    color: white;            /* text color */
    padding: 20px;           /* space inside footer */
    text-align: center;      /* center text */
    border-radius: 10px 10px 0 0; /* rounded top corners */
    position: fixed;         /* stick to bottom */
    bottom: 0;
    left: 0;
    width: 100%;             /* full width */
    font-size: 18px;
}

.footer a {
    color: #ffeb3b;          /* link color */
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
}

			</style>
		<!--End of title-->
		
		<!--Style sheets css -->
		<link rel="stylesheet" href="css/print_cancel.css">
		<!--End of css -->
		
	</head>
	<!--body start-->
	<body id="body" class="body" onload="show_c()">
			<!-- Navigation bar Start-->
			<div class="navbar" id="navbar">
			<ul class="menu" id="menu">
				
				<li><a href="#body"><img src="icons/favicon.png" width="20px" height="20px" alt="Home-Logo"></a></li>
				<li><a href="index.php">Home</a></li>
				
				<li class="navspace" onclick="show()"><a href="#body"><img src="icons/user-2.png" style="width:15px; height:15px;"></a></li>
				<li onclick="show_c()"><a href="#body">Lab Report</a></li>
			</ul>
			</div>
			<!-- Navigation bar End-->
			<div class="admin-login" id="admin-login">
				<form action="login.php" method="post"><br>
				<label class="un">Admin-Username:</label><br/>
				<input type="text" name="username" id="username" placeholder="your username"required autocomplete="off"/><br/>
				<label class="pw">Admin-Password:</label><br/>
				<input type="password" name="password" id="password" placeholder="your password" required autocomplete="new-password"/><br/>
				<input type="submit" name="submit" value="login" id="submit"/>
				
				<input type="button" name="cancel" value="cancel" onclick="end()" id="btn_cancel"/>
				<p class="forgot"><a href="">...</a></p>
				</form>
			</div>
			<!-- container division start-->
			<div class="container" id="container" onclick="end()">
				<div class="cancel" id="cancel">
				<form action="print_m.php" method="post">
				<font color="black" ><h2>Patient ID:</h2><br/></font>
				<input type="text" name="id" id="id" required/><br/>
				<input type="submit" name="submit" value="Get your Report" id="btncancel"/>
				</form>
				</div>
			</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!--container division end-->
	<!--footer start-->
	<footer>
	<div class="footer" id="footer" onclick="end()">
	<h4>+ 94 0777123456 &bull; <a href="#contact">NMS Hospitals, Kurumankadu, Vavuniya, srilanka  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 08:00 am - 12:00 am<br>
	</p>
	</div>
</footer>
	<!--footer End-->
	<!--Java Script -->
	<script type="text/javascript" src="js/cancel.js">
	</script>
	<!-- End JavaScript-->
	</body>
	<!--End Body-->
</html>