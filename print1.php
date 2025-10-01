
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
   docprint.document.write('<html><head><title>Lab DS</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<html lang="en"> 

	<head> 
		<title> Patient Registration  </title> 
<style>
    /* Reset default margin/padding */
/* Reset & Body */
body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(135deg, #a8edea, #fed6e3); /* vibrant gradient background */
    color: #333;
}

/* Buttons */
.button {
    margin: 20px auto;
    text-align: center;
}
.button a {
    display: inline-block;
    margin: 10px;
    padding: 12px 25px;
    background: linear-gradient(45deg, #ff6ec4, #7873f5); /* vibrant gradient */
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    font-weight: 700;
    border-radius: 30px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.25);
    transition: all 0.3s ease;
}
.button a:hover {
    background: linear-gradient(45deg, #ff3cac, #4b0082);
    transform: translateY(-3px);
}

/* Print content box */
#print_content {
    background: linear-gradient(to bottom right, #ffffff, #f0f8ff); /* subtle gradient card */
    margin: 30px auto;
    padding: 30px 35px;
    width: 450px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    line-height: 1.8;
    font-size: 25px;
    text-align:center;
    color: #222;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
#print_content:hover {
    transform: scale(1.03);
    box-shadow: 0 12px 35px rgba(0,0,0,0.25);
}

/* Patient info labels */
#print_content span.label {
    font-weight: 700;
    color: #ff3cac; /* vibrant label color */
    display: inline-block;
    width: 120px; /* fixed width for alignment */
}
#print_content span.value {
    color: #444;
}

/* Line breaks spacing */
#print_content br {
    margin-bottom: 6px;
}
/* Modern Glassmorphism Header */
.wrap {
    background: rgba(255, 255, 255, 0.2); /* semi-transparent */
    backdrop-filter: blur(12px);          /* glass blur effect */
    -webkit-backdrop-filter: blur(12px);  /* for Safari */
    border-radius: 15px;
    margin: 20px auto;
    padding: 25px 20px;
    width: 450px;                         /* match your card width */
    text-align: center;
    color: #fff;
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    border: 1px solid rgba(255,255,255,0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.wrap:hover {
    transform: scale(1.02);
    box-shadow: 0 12px 40px rgba(0,0,0,0.25);
}
.wrap h1 {
    margin: 0;
    font-size: 26px;
    letter-spacing: 1px;
    background: linear-gradient(90deg, #ff6ec4, #7873f5);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

</style>
</head>

<body id="body"> 

			<header >

            	<div class="wrap">
					<h1>Patient - Information</h1>
				</div>
              
				
<div id="print_content" style="width: 400px;">
<br><br>
<?php
include('db.php');

$id = $_GET['id'] ?? '';

// Validate the input before using it in the query
if (!empty($id)) {
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $bd->prepare("SELECT * FROM register WHERE pid = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch and display the data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo 'Name: ' . htmlspecialchars($row['name']) . '<br>';
            echo 'NIC: ' . htmlspecialchars($row['nic']) . '<br>';
            echo 'Patient-ID: ' . htmlspecialchars($row['pid']) . '<br>';
            echo 'Address: ' . htmlspecialchars($row['address']) . '<br>';
            echo 'Gender: ' . htmlspecialchars($row['gender']) . '<br>';
            echo 'Age: ' . htmlspecialchars($row['age']) . '<br>';
            echo 'Phone-No: ' . htmlspecialchars($row['phone']) . '<br>';
            echo 'Doctor-ID: ' . htmlspecialchars($row['drid']) . '<br>';
            echo 'Report: ' . htmlspecialchars($row['report']) . '<br>';
        }
    } else {
        echo "No patient found with Patient-ID: " . htmlspecialchars($id);
    }

    $stmt->close();
} else {
    echo "Patient ID is required.";
}
?>

</div>	
<div class="button">
<a href="index.php">Index...</a>	
				
                
<a href="javascript:Clickheretoprint()">Print</a>
</div>

		
</heder>

</body>
</html> 