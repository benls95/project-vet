<html>
<head>
<link rel="stylesheet" type="text/CSS" href="mycss.CSS" /> 
</head>
<body style="background-color:lightgreen"> 
<div align="center" id="header">
<div id="leftlogo"><img  src="images/header_logo.png" alt="Left logo" title="”Left logo”"></div>
<div id="rightlogo"><img  src="images/header_logo.png" alt="Right logo" title="Right logo”"></div>
<div id="h1"><h1>Select Data By ID</h1>
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
<div align="center" id="portallink">
<a href="dbportal.php">Database Portal Home</a> 
</div>

<form action="selectdata.php" method="post">
<fieldset style="width:300px">
<legend style=color:deepskyblue>Select Data By ID:</legend>
ID: <input type="integer" name="ID"><br />
<input type="submit" name="submit">
</fieldset>
</form>

<div align="center">
<table bgcolor="white" border="1">

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

$sql = "SELECT * FROM Owners WHERE ID='$_POST[ID]'";
$result = $conn->query($sql);


 //echo "New record created successfully - ". $_POST['firstname']. //" ". $_POST['lastname']. " ". $_POST['email'];
		
if ($result->num_rows > 0) {
	if ($result) {
    echo "Record with ID = ". $_POST['ID'] ; //. $_POST['ID']
}
     // output data of each row
		echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr>" . "<td>" . $row["id"] . "<td>" . $row["firstname"]. "<td>" . $row["lastname"] .  "<td>" . $row["email"] . "</tr>";
} 
	
}
		
else {
     echo "Record missing";
}

	

$conn->close();
	}
?> 

</table>
</div>

</body>
</html>
