<html>
<head>
<link rel="stylesheet" type="text/CSS" href="mycss.CSS" /> 
</head>
<body style="background-color:lightgreen"> 
<div align="center" id="header">
<div id="leftlogo"><img  src="images/header_logo.png" alt="Left logo" title="”Left logo”"></div>
<div id="rightlogo"><img  src="images/header_logo.png" alt="Right logo" title="Right logo”"></div>
<div id="h1"><h1>Insert Data</h1>
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
<form action="insertdata.php" method="post">
<fieldset style="width:300px">
<legend style=color:deepskyblue>Insert Data:</legend>
Firstname: <input type="text" name="firstname"><br />
Lastname: <input type="text" name="lastname" ><br />
Email: <input type="text" name="email"><br />
<input type="submit" name="submit">
</fieldset>
</form>

<div align="center" id="portallink">
<a href="dbportal.php">Database Portal Home</a> 
</div>

<?php
//PHP mySQL
// OR
//PHP PDO (suitable for all 9 dbs, oracle etc.)
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

$sql = "INSERT INTO Owners (firstname, lastname, email)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully - ". $_POST['firstname']. " ". $_POST['lastname']. " ". $_POST['email'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
?>


</body>
</html>