<!DOCTYPE HTML >
<html lang="en">
<head>
<meta charset="UTF-8">
<title>container - jmcvmw/04-yellow</title>
<link rel="stylesheet" href="./css/styles.css" type="text/css" > 
<link rel='icon' href='./favicon/04-yellow.ico' type='image/x-icon'/ >
</head>
<body>


<h6>!!! THESE DOCKER IMAGES ARE NOT MAINTAINED AND DO NOT RECEIVE SECURITY UPDATES !!!</h6>


<h1>
<?php 
$ip_server = $_SERVER['SERVER_ADDR']; 
$ip_port = $_SERVER['SERVER_PORT'];
echo "Server : $ip_server  -  Port : $ip_port"; 
?></h1>


<p style="background-color:yellow">04-YELLOW</p>

<h2>
<?php 
echo "Client: ";
echo  $_SERVER['REMOTE_ADDR'];
?></h2>


Jason Meers - 2020
</body>
</html> 