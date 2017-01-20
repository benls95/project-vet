<html>
<head>
<link rel="stylesheet" type="text/CSS" href="mycss.CSS" /> 
</head>
<body style="background-color:lightgreen"> 

<div align="center" id="header">
<div id="leftlogo"><img  src="images/header_logo.png" alt="Left logo" title="”Left logo”"></div>
<div id="rightlogo"><img  src="images/header_logo.png" alt="Right logo" title="Right logo”"></div>
<div id="h1"><h1>Update Data</h1>
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
<form action="updatedata.php" method="post" >
<fieldset style="width:300px">
<legend style=color:deepskyblue>Update Data:</legend>
Firstname: <input type="text" name="firstname"><br />
Lastname: <input type="text" name="lastname"><br />
Email: <input type="text" name="email"><br />
ID: <input type="integer" name="ID"><br />
<input type="submit" name="submit">
</fieldset>
</form>

<div align="center" id="portallink">
<a href="dbportal.php">Database Portal Home</a> 
</div>

<?php
	
	if (isset($_POST['submit'])) {
//PHP mySQL
// OR
//PHP PDO (suitable for all 9 dbs, oracle etc.)
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

//$sql = "Update Owners (firstname, lastname, email)
//SET ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]')";

$sql = "UPDATE Owners SET firstname='$_POST[firstname]', lastname='$_POST[lastname]', email='$_POST[email]' WHERE id='$_POST[ID]'";
		
//$sql = "INSERT INTO Owners (firstname, lastname, email)
//VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]')";
	
if ($conn->query($sql) === TRUE) {
    echo "Record updated";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
?>


</body>
</html>

