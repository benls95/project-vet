<html>
<head>
<link rel="stylesheet" type="text/CSS" href="mycss.CSS" /> 
<script type="text/javascript" src="sound-mouseover.js"></script>
</head>
<body style="background-color:lightgreen"> 
<div align="center" id="header">
<div id="leftlogo"><img  src="images/header_logo.png" alt="Left logo" title="”Left logo”"></div>
<div id="rightlogo"><img  src="images/header_logo.png" alt="Right logo" title="Right logo”"></div>
<div id="h1"><h1>Welcome</h1>
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

<div align="center" id="insertlink">
<a href="insertdata.php">Insert Data</a> 
</div>

<div align="center" id="insertmlink">
<a href="insertmdata.php">Insert Multiple Data</a> 
</div>

<div align="center" id="deletelink">
<a href="deletedata.php">Delete Data</a> 
</div>

<div align="center" id="updatelink">
<a href="updatedata.php">Update Data</a> 
</div>

<div align="center" id="selectlink">
<a href="selectdata.php">Select Data By ID</a> 
</div>

<div align="center" id="resetlink">
<a href="reset.php">Reset Owner Table</a> 
</div>

<?php
	//PHP mySQL
// OR
//PHP PDO (suitable for all 9 dbs, oracle etc.)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("<p align=right>Connection failed: <p/>" . $conn->connect_error);
} 
else {
   echo "<p align=right> First Connection success </p> "; 
}
	
		// Create database
$sql = "CREATE DATABASE myDB";
	
if ($conn->query($sql) === TRUE) {
    echo "<p align=right> Database created successfully<p/>";
} 
else {
    //echo "Error creating database: " . $conn->error;
}


	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("<p align=right>Connection failed: <p/>" . $conn->connect_error);
} 
else {
    echo "<p align=right>Connected! <p/>" ;
}
	
// sql to create table
$sql = "CREATE TABLE Owners (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";	

	if ($conn->query($sql) === TRUE) {
    echo "<p align=right>Table Owners created successfully<p/>";
} else {
    //echo "Error creating table: " . $conn->error;
}
$conn->close();		
	
?>

<div align="center">
<table bgcolor="white" border="1">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("<p align=right>Connection failed: <p/>" . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email FROM Owners";
$result = $conn->query($sql);

echo "Pet Owner Table records<br/><br/><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
if ($result->num_rows > 0) {
     // output data of each row	
     while($row = $result->fetch_assoc()) {
         echo "<tr>" . "<td>" . $row["id"] . "<td>" . $row["firstname"]. "<td>" . $row["lastname"] .  "<td>" . $row["email"] . "</tr>";
} 
}
else {
     echo "No records";
}

	

$conn->close();
?> 

</table>
</div>

</body>
</html>