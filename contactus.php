		<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	
include('db.php'); // Make sure this connects to your database

$success = '';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = $bd->real_escape_string(trim($_POST['name'] ?? ''));
    $email = $bd->real_escape_string(trim($_POST['email'] ?? ''));
    $message = $bd->real_escape_string(trim($_POST['message'] ?? ''));

    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } else {
        // Save to database
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($bd->query($sql) === TRUE) {
            $success = "Message sent successfully!";
        } else {
            $error = "Error: " . $bd->error;
        }
    }
}

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
		NMS Hospitals - contact us
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
* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], [type=email], textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #089790ff;
    color: black;
    padding: 19px 35px;
    border-radius: 5px;
    cursor: pointer;

	
	

}

input[type=submit]:hover {
    background-color: #40defaff;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
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
				<li><a href="#body">Contact Us</a></li>
				<li class="navspace" onclick="show()"><a href="#body"><img src="icons/user-2.png" style="width:15px; height:15px;"></a></li>
				
				
			</ul>
			</div>
			<!-- Navigation bar End-->
			<div class="admin-login" id="admin-login">
				<form action="login.php" method="post"><br>
				<label class="un">Admin-Username:</label><br/>
				<input type="text" name="username" id="username" placeholder=" your username"required autocomplete="off"/><br/>
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
  <div style="text-align:center">
    <h1>Contact Us</h1>
    <h2>leave us a message:</h2>
  </div>
  <div class="row">
    <div class="column">
		<div id="map" style="width:100%;height:500px">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0!2d79.8850!3d8.7500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3af3e0d6f6f3!2sVavuniya!5e0!3m2!1sen!2slk!4v1694567890123" 
        width="100%" 
        height="500" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>

		
      <!-- <div id="map" style="width:100%;height:500px"><iframe src="" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div> -->
    </div>
    <div class="column">
		<?php if ($success): ?>
    <p style="color: green; font-weight: bold;"><?php echo $success; ?></p>
<?php endif; ?>

<?php if ($error): ?>
    <p style="color: red; font-weight: bold;"><?php echo $error; ?></p>
<?php endif; ?>

		<form action="message.php" method="post">
			
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.." required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="hitechlab@gmail.com" required>

    <label for="subject">Subject</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:170px" required></textarea>

    <input type="submit" value="Submit">
</form>

        <!-- <label for="fname">First Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name.." required>
        <label for="email">Email</label>
		<input type="email" id="email" name="email" placeholder="hitechlab@gmail.com" required>
        <label for="subject">Subject</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form> -->
    </div>
  </div>
</div>

<!-- Initialize Google Maps -->
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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