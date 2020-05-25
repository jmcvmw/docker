<!DOCTYPE HTML >
<html lang="en">
<head>
<meta charset="UTF-8">
<title>External style rules</title>
<link rel="stylesheet" href="external.css" type="text/css" > 

</head>
<body>

<h1>
<?php 
$ip_server = $_SERVER['SERVER_ADDR']; 
$ip_port = $_SERVER['SERVER_PORT'];
echo "Server: $ip_server : $ip_port"; 
?></h1>

<p style="background-color:blue">02-BLUE</p>

<h2>
<?php 
echo "Client: ";
echo  $_SERVER['REMOTE_ADDR'];
?></h2>

</body>
</html> 