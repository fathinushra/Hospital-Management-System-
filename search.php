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
		NMS Hospitals - Booking
		</title>
		<!--End of title-->
		
		<!--Style sheets css -->
		<link rel="stylesheet" href="css/design.css">
		<style>
			body {
  margin: 0;
  padding: 0;
  background-image: url("img/bg.jpg"); /* use your image path */
  background-size: cover;      /* cover full screen */
  background-position: center; /* center the image */
  background-repeat: no-repeat;/* stop repeating */
  background-attachment: fixed;/* keep fixed when scrolling (optional) */
  font-family: Arial, sans-serif;
}

		.search{
	width:30%;
	height:80%;
	margin:0;
	text-align:center;
	position:relative;
	right:30%;
	left:30%;
	top:10%;
	box-sizing:border-box;
	border-radius:2%;
	border:1.5px solid lightblue;
}
.search p{
	color: #0698d18c;
	font-weight:bold;
	font-family:Times New Roman;
	font-size:30px;
}
/* search form design */
.search input[type=date],[type=text],[type=time]{
	width:50%;
	padding:10px 20px;
	margin:8px 0;
	border:1px solid #ccc;
	border-radius:4px;
	cursor:pointer;
	background-image:url(../icons/favicon.png);
	background-position:5px 5px;
	background-repeat:no-repeat;
}

.search select
	{width:50%;
	padding:10px 20px;
	margin:8px 0;
	display:inline-block;
	border:1px solid #ccc;
	border-radius:4px;
	box-sizing:border-box;
	background-image:url(../icons/favicon.png);
	background-position:5px 5px;
	background-repeat:no-repeat;
}
.search select:focus{
	border:1px solid #FF0030;
}
.search input[type=submit]{
	background-color: black;
	border:none;
	color:white;
	padding:15px 32px;
	text-align:center;
	text-decoration:none;
	font-size:16px;
	margin:4px 2px;
	cursor:pointer;
	font-family:Times New Roman;
}
.search input[type=submit]:hover{
	/* background-color:; */
	background: linear-gradient(45deg, #1ebfffff, #00ff55ff);

	color:darkblue;
}
/*search form design end*/
.home1{
	height:100%;
	width:100%;
	border-radius:0px;
	position:relative;
	top:52.5px;
	padding:70px;
	
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
				<li><a href="#body">Booking</a></li>
				<li class="navspace" onclick="show()"><a href="#body"><img src="icons/user-2.png" style="width:15px; height:15px;"></a></li>
				
				
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
				<!-- </form> -->
				<input type="button" name="cancel" value="cancel" onclick="end()" id="btn_cancel"/>
				<p class="forgot"><a href="">...</a></p>
				</form>
			</div>
<!-- Availability checks-->
			<div class="home1" id="home1">
			<br>
			<div class="search" id="search">
			<br><br><br>
			<form action="book.php" method="post">
				<p class="label-search">Select Your Consultant</p>
					<select name="doctor">
					<?php
include('db.php'); // Assumes db.php uses mysqli and defines $conn

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

					</select><br>
				<input type="text" name="name" placeholder="Patient Name" required id="name"/><br>
				<input type="text" name="age" placeholder="Patient Age" required id="name"/><br>
				<font color="black">Male<input type="radio" name="gender" value="male" id="gender"/><br>
				Female<input type="radio" name="gender" value="female" id="gender"/><br></font>
				<input type="text" name="address" placeholder="Your address..." required id="address"/><br>
				<input type="text" name="phone" placeholder="0777123456" required id="phone"/>
				<p style="font-size:20px;font-weight:bold;">Date:</p>
				<input type="date" name="date" placeholder="Date" required id="date"/>
				<p style="font-size:20px;font-weight:bold;">Time:</p>
				<input type="time" name="time" placeholder="Time" required id="time"/><br><br>
				<input type="submit" name="search" value="Get Appointment" id="search"/>
			</form>
			</div>
			<!--End Checking-->
			</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!--footer start-->
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