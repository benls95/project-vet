<html>
<head>
<link rel="stylesheet" type="text/CSS" href="mycss.CSS" /> 
</head>
<body style="background-color:lightgreen"> 
<div align="center" id="header">
<div id="leftlogo"><img  src="images/header_logo.png" alt="Left logo" title="”Left logo”"></div>
<div id="rightlogo"><img  src="images/header_logo.png" alt="Right logo" title="Right logo”"></div>
<div id="h1"><h1>Comments</h1>
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
<a href="feedback.htm">Feedback Home</a> 
</div>

<?php

$email    = $_POST['email'];

$comments = $_POST['comments'];

?>

Hello, <?php echo $_POST["yourname"]; ?>. <!--is printing actual form data when all files are in server folder-->

<br />
Thanks for your comments.

<br />
<br />
Comments:<br />

<?php echo $comments; ?>

</body>

</html>