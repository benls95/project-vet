<html>
<head>
<link rel="stylesheet" type="text/CSS" href="mycss.CSS" /> 
<script type="text/javascript" src="sound-mouseover.js"></script>
</head>
<body style="background-color:lightgreen"> 
<div align="center" id="header">
<div id="leftlogo"><img  src="images/header_logo.png" alt="Left logo" title="”Left logo”"></div>
<div id="rightlogo"><img  src="images/header_logo.png" alt="Right logo" title="Right logo”"></div>
<div id="h1"><h1>Reset Table</h1>
	</div>
</div> <!-- header div-->

<div id="logo">
<a href="Home Page.htm">
<img  src="images/LOGO.png" alt="Home Button" title="”Go Home!”"></a> 
</div> 

<div align="center" id="portallink">
<a href="dbportal.php">Database Portal Home</a> 
</div>
<br />
<br />
<br />
<br />
<br />
<br />

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
	
	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
    echo "Connected! " ;
}
	
// sql to create table

$sql = "DROP Table Owners;";   //clear table
$sql .= "CREATE TABLE Owners (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";	

	if ($conn->multi_query($sql) === TRUE) {
    echo "Table Owners reset and cleared";
} else {
    //echo "Error creating table: " . $conn->error;
}
$conn->close();	


	
?>


</body>
</html>