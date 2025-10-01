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
		NMS Hospitals - About us
		</title>
		<!--End of title-->
		
		<!-- Style sheets css
		<link rel="stylesheet" href="css/design.css">
		<style>
.home1{
	height:100%;
	width:100%;
	border-radius:0px;
	position:relative;
	top:52.5px;
}
.container{
	width:50%;
	height:auto;
	text-align:center;
	position:relative;
	left:40%;
}
		.footer{
	height:120px;
	position:relative;
	top:120px;
	text-align:center;
	color:black;
	background-image:url(../img/);
	width:50%;
	border-radius:0px;
	left:40%;
	right:10%;
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
</style> -->
<head>
  <!-- Correct CSS link -->
  <link rel="stylesheet" href="css/design.css">

  <!-- Inline fallback CSS -->
  <style>
    /* .home1 {
      height: 100%;
      width: 100%;
      position: relative;
      top: 52.5px;
    }
    .container {
      width: 50%;
      margin: 0 auto; /* centers instead of left:40% */
      text-align: center;
    
    /* .footer {
      height: 120px;
      margin-top: 120px;
      text-align: center;
      color: black;
      background-image: url("img/logo.png"); /* fixed path */
      /* background-repeat: no-repeat;
      background-size: cover;
      width: 100%;
	  background-color:skyblue; */
    
    .footer a {
      color: black;
    }
	.about-section {
  display: flex;             /* put image + text in one row */
  align-items: flex-start;   /* align image and text at the top */
  gap: 30px;                 /* space between image and text */
  width: 85%;                /* control overall width */
  margin: 40px auto;         /* center the section */
}

.about-img {
  flex: 0 0 900px; 
  width:70px;  
   max-width: 1000px;
    padding: 40px 40px;
    border-radius: 25px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    text-align: center;        /* image block fixed width */
}

.about-img img {
  width: 120%;               /* make image fit */
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.about-text {
  flex: 1;                   /* text takes remaining width */
  text-align: center;       /* neat text alignment */
}


	 */
/* Body & Background */
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', Arial, sans-serif;
    background: linear-gradient(120deg, #f0f8ff, #e6f2ff); /* light, modern gradient */
    color: #333;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Container for About Section */
.home1 {
    flex: 1; /* take remaining vertical space */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 80px 20px;
}

.container {
    width: 60%;
    max-width: 400px;
    background: #ffffff; /* light card background */
    padding: 25px 25px;
    min-height: 300px; 
    border-radius: 25px;
    /* box-shadow: 0 15px 40px rgba(0,0,0,0.25); subtle 3D shadow */
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 30px;
    text-align: center;
}

/* About Text 3D Neon Effect */
.aboutpara h3,
.aboutpara h4,
.aboutpara h5 {
    margin: 10px 0;
    font-weight: 900;
    color: #140a10ff;
    background: linear-gradient(45deg, #0d3235ff, #035964ff, #00bcd4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 
        2px 2px 2px rgba(0,0,0,0.2),
        4px 4px 5px rgba(0,0,0,0.15);
}

.aboutpara h4 { font-size: 1.8em; }
.aboutpara h5 { font-size: 1.4em; }

.aboutpara {
    font-size: 2.5emem;
    color: #555;
    line-height: 1.8;
    text-align:center;
}

/* Footer fixed at bottom */

/* }

.footer h4 {
    margin: 0 0 10px 0;
    font-size: 1.2em;
}



/* Responsive */
@media(max-width: 768px){
    .container {
        width: 90%;
        padding: 30px;
    }

    .aboutpara h3 { font-size: 2em; }
    .aboutpara h4 { font-size: 1.5em; }
    .aboutpara h5 { font-size: 1.2em; }
    .aboutpara { font-size: 1em; }
} */
 */
/* Body setup */
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', Arial, sans-serif;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background: #e6f2ff; /* light background */
}

/* Main content flex */
.home1 {
    flex: 1; 
    display: flex;
    justify-content: center; /* horizontal center */
    align-items: center;     /* vertical center */
    padding: 60px 20px;
}

/* About container */
/* .container {
    display: flex;
    align-items: center;        /* vertical center */
    /* justify-content: flex-start;
    gap: 30px;                  /* space between image & text */
    /* max-width: 1000px;
    margin: 0 auto;
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2); */ */
 */

/* Pop-out on hover */
.container:hover {
    transform: translateY(-10px); /* lifts up */
    box-shadow: 0 30px 70px rgba(0,0,0,0.35); /* deeper 3D */
}

/* About headings with 3D gradient */
.aboutpara h1,
.aboutpara h2,
.aboutpara h3 {
    font-weight: 900;
    background: linear-gradient(45deg, #ff6ec7, #3f51b5, #00bcd4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 3px 3px 8px rgba(0,0,0,0.2);
    margin: 15px 0;
}

/* About paragraph text */
.aboutpara {
    font-size: 50px;
    line-height: 1.8;
    color: #555;
    text-align:center;
}

/* Footer always at bottom */
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
    

/* Responsive */
@media(max-width: 768px){
    .container {
        width: 90%;
        padding: 30px;
    }
    .aboutpara h1 { font-size: 4em; }
    .aboutpara h2 { font-size: 2em; }
    .aboutpara h3 { font-size: 2em; }
    .aboutpara { font-size: 1em; }
}
img{
  float: left;               /* force image to the left */
  width: 40px;              /* fixed width */
  height: auto;              /* keep aspect ratio */
  margin-right: 20px;        /* space between image and text */
  border-radius: 12px;       /* rounded corners */
  box-shadow: 0 6px 15px rgba(0,0,0,0.2); /* subtle shadow */
}




  </style>
</head>

		<!--End of css -->
		</head>
		<!--Body Start-->
	<body id="body" class="body" background="img/logo.png" style="background-repeat:no-repeat;">
       
			<!-- Navigation bar Start-->
			<div class="navbar" id="navbar">
			<ul class="menu" id="menu">		
				<li><a href="#home"><img src="icons/favicon.png" width="15px" height="15px" alt="Home-Logo"></a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="#body">About Us</a></li>
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
				
				<input type="button" name="cancel" value="cancel" onclick="end()" id="btn_cancel"/>
				<p class="forgot"><a href="">... </p>
				</form>
			</div>
			<div class="home1" id="home1" >
			<br>
				 <div class="about-img">
                     <img src="img/s1.jpg" alt="Hospital Image">
</div>
					<div class="container">
        
			<p class="aboutpara" id="aboutpara">
			<center>
             
			<h1>About Us</h1>
		<h3>	NMS Hospitals is one of the Private Hospital in Vavuniya. </h3>
			
			<h2>Our Credentials</h2>

		<h3>	Founded in 2015 in Vavuniya, Srilanka, NMS Hospitals now connects various Hospitals and Clinics across the Srilanka with

			particular no of branches. </h3>
			<h2>Why Test - Channelling With Us?</h2>

			<h3>NMS Hospitals provides their clients and patients, the most uncomplicated and hassle-free appointments and tests experience ever.

			Choose your Test or Test report, select a Consultancy or Get an appointment based on Testing report!

			The NMS Hospitals experience does not end with the sadness - Your health is our Aim.</h3>
			</p>
</center>
			</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<!--footer start-->
			<footer><br><br><br>
	<div class="footer" id="footer" onclick="end()">
		
	<br><h4>+ 94 0777123456 &bull; <a href="#contact">NMS Hospitals, Kurumankadu, Vavuniya, srilanka  </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 08:00 am - 12:00 am<br>
	</p>
	</div>
</footer>
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