<html>
<head>
<link rel="stylesheet" type="text/CSS" href="mycss.CSS" /> 
</head>
<body style="background-color:lightgreen"> 
<div align="center" id="header">
<div id="leftlogo"><img  src="images/header_logo.png" alt="Left logo" title="”Left logo”"></div>
<div id="rightlogo"><img  src="images/header_logo.png" alt="Right logo" title="Right logo”"></div>
<div id="h1"><h1>Insert Multiple</h1>
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
<form action="insertmdata.php" method="post">
<fieldset style="width:300px">
<legend style=color:deepskyblue>Insert Multiple Data:</legend>
Firstname: <input type="text" name="firstname" value="John"><br />
Lastname: <input type="text" name="lastname" value="Doe"><br />
Email: <input type="text" name="email" value="john@example.com"><br /><br/>
Firstname: <input type="text" name="firstname2" value="Mary"><br />
Lastname: <input type="text" name="lastname2" value="Moe"><br />
Email: <input type="text" name="email2" value="mary@example.com"><br/><br/>
Firstname: <input type="text" name="firstname3" value="Julie"><br />
Lastname: <input type="text" name="lastname3" value="Dooley"><br />
Email: <input type="text" name="email3" value="julie@example.com"><br/><br/>
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

$sql = "INSERT INTO Owners (firstname, lastname, email)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]');";
$sql .= "INSERT INTO Owners (firstname, lastname, email)
VALUES ('$_POST[firstname2]', '$_POST[lastname2]', '$_POST[email2]');";
$sql .= "INSERT INTO Owners (firstname, lastname, email)
VALUES ('$_POST[firstname3]', '$_POST[lastname3]', '$_POST[email3]');";
//$sql .= "INSERT INTO Owners (firstname, lastname, email)
//VALUES ('Mary', 'Moe', 'mary@example.com');";
//$sql .= "INSERT INTO Owners (firstname, lastname, email)
//VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
		
	}
?>