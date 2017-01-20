<html>
<head>
<link rel="stylesheet" type="text/CSS" href="mycss.CSS" /> 
</head>
<body style="background-color:lightgreen"> 
<div align="center" id="header">
<div id="leftlogo"><img  src="images/header_logo.png" alt="Left logo" title="”Left logo”"></div>
<div id="rightlogo"><img  src="images/header_logo.png" alt="Right logo" title="Right logo”"></div>
<div id="h1"><h1>Delete Data</h1>
	</div>
</div> <!-- header div-->

<div id="logo">
<a href="Home Page.htm">
<img  src="images/LOGO.png" alt="Home Button" title="”Go Home!”"></a> 
</div> 
<br />
<br />
<br />
<br />
<br />
<br />
<form action="deletedata.php" method="post">
<fieldset style="width:300px">
<legend style=color:deepskyblue>Delete Data:</legend>
ID: <input type="text" name="ID"><br />
<input type="submit" name="submit">
</fieldset>
</form>

<div align="center" id="portallink">
<a href="dbportal.php">Database Portal Home</a> 
</div>

<?php
	
		if (isset($_POST['submit'])) {
			
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

// sql to delete a record
$sql = "DELETE FROM Owners WHERE id='$_POST[ID]'";

if ($conn->query($sql) === TRUE) {
    echo "Record with ID " . $_POST['ID'] . " deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
		}
	
?>