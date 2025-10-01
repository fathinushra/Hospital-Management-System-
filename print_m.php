<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>
					<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Reports</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<html lang="en"> 

	<head> 
		<title> Patient Report  </title> 
        <style>
     body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: Arial, sans-serif;

      /* Background image */
      background-image: url("img/s2.jpg"); /* replace with your image path */
      background-size: cover;      /* make it cover the full screen */
      background-position: center; /* keep it centered */
      background-repeat: no-repeat;/* don’t repeat the image */
      background-attachment: fixed;/* keep it fixed while scrolling */
    }
/* Center the form wrapper */
form {
    max-width: 500px;            /* form width */
    margin: 40px auto;           /* center horizontally */
    padding: 30px;               /* inner spacing */
    background: linear-gradient(135deg, #f0f8ff, #e6f2ff); /* light blue gradient */
    border-radius: 15px;         /* rounded corners */
    box-shadow: 0 8px 20px rgba(0,0,0,0.2); /* subtle shadow */
    font-family: Arial, sans-serif;
}

/* Form title */
form h1 {
    text-align: center;
    color: #1E90FF;
    margin-bottom: 20px;
    font-size: 28px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
}

/* Buttons container */
.button {
    text-align: center;
    margin-top: 20px;
}

/* Common button style */
.button a {
    display: inline-block;
    padding: 12px 25px;
    margin: 10px 5px;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    border-radius: 12px;
    color: white;
    transition: 0.3s;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* Print button - blue gradient */
.button a[href^="javascript:Clickheretoprint"] {
    background: linear-gradient(45deg, #1E90FF, #00BFFF);
}

.button a[href^="javascript:Clickheretoprint"]:hover {
    background: linear-gradient(45deg, #00BFFF, #1E90FF);
    transform: scale(1.05);
}

/* View Report button - green gradient */
.button a[href^="reports/"] {
    background: linear-gradient(45deg, #28a745, #85e085);
}

.button a[href^="reports/"]:hover {
    background: linear-gradient(45deg, #85e085, #28a745);
    transform: scale(1.05);
}

/* Index button - orange gradient */
.button a[href="index.php"] {
    background: linear-gradient(45deg, #ff8c00, #ffa500);
}

.button a[href="index.php"]:hover {
    background: linear-gradient(45deg, #ffa500, #ff8c00);
    transform: scale(1.05);
}

/* Report content box */
#print_content {
    padding: 20px;
    border: 2px solid #1E90FF;    /* border color */
    border-radius: 12px;
    background: #ffffff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    margin: 20px auto;
    font-size: 14px;
    line-height: 1.5;
}

/* Optional: responsive for small screens */
@media (max-width: 600px) {
    form {
        padding: 20px;
        width: 90%;
    }
    #print_content {
        font-size: 13px;
    }
    .button a {
        padding: 10px 20px;
        font-size: 14px;
    }
}
</style>

        <!-- <style>
/* Center the form nicely */
form .wrap {
    text-align: center;
    margin-bottom: 20px;
}

/* Style buttons/links inside .button */
.button a {
    display: inline-block;
    padding: 12px 25px;
    margin: 10px 5px;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    border-radius: 12px;
    color: white;
    transition: 0.3s;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* Print button - blue gradient */
.button a[href^="javascript:Clickheretoprint"] {
    background: linear-gradient(45deg, #1E90FF, #00BFFF);
}

.button a[href^="javascript:Clickheretoprint"]:hover {
    background: linear-gradient(45deg, #00BFFF, #1E90FF);
    transform: scale(1.05);
}

/* View Report button - green gradient */
.button a[href^="reports/"] {
    background: linear-gradient(45deg, #28a745, #85e085);
}

.button a[href^="reports/"]:hover {
    background: linear-gradient(45deg, #85e085, #28a745);
    transform: scale(1.05);
}

/* Index button - orange gradient */
.button a[href="index.php"] {
    background: linear-gradient(45deg, #ff8c00, #ffa500);
}

.button a[href="index.php"]:hover {
    background: linear-gradient(45deg, #ffa500, #ff8c00);
    transform: scale(1.05);
}

/* Optional: make the container and report content look cleaner */
#print_content {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 12px;
    background: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    max-width: 400px;
    margin: 20px auto;
    font-family: Arial, sans-serif;
    line-height: 1.5;
} -->
</style>

	</head>

<body id="body"> 

			<header >
                <center><br><br>
                  <form>
            	<div class="wrap">
					<h1>Report - Information</h1>
				</div>
              
				<div class="button"><br><br>

<div id="print_content" style="width: 400px;">
<br><br>
<?php
include('db.php');

$pid = $_POST['id'] ?? '';

// Check if pid is not empty
if (!empty($pid)) {
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $bd->prepare("SELECT * FROM register WHERE pid = ?");
    $stmt->bind_param("s", $pid);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check and display data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo 'Name: ' . htmlspecialchars($row['name']) . '<br>';
            echo 'NIC: ' . htmlspecialchars($row['nic']) . '<br>';
            echo 'Patient-ID: ' . htmlspecialchars($row['pid']) . '<br>';
            echo 'Lab Report: ' . htmlspecialchars($row['report']) . '<br>';

            // If you want to store $pic for later use
            $pic = $row['report'];
        }
    } else {
        echo "No patient found with ID: " . htmlspecialchars($pid);
    }

    $stmt->close();
} else {
    echo "Patient ID is required.";
}
?>

</div>
<a href="reports/<?php echo($pic);?>" target="_blank">View Report</a>	
<br>

<div class="button"><br><br>
<a href="javascript:Clickheretoprint()">Print</a>

<br><br>

<a href="index.php">Index...</a>	
				</div>
				</div>
</form>
</center>
		 <header>


</body>
</html> 