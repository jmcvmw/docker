<!DOCTYPE HTML >
<html lang="en">
<head>
<meta charset="UTF-8">
<title>container - jmcvmw/00-default</title>
<link rel="stylesheet" href="./css/styles.css" type="text/css" > 
<link rel='icon' href='./favicon/00-default.ico' type='image/x-icon'/ >
</head>
<body>


<h6>!!! THESE DOCKER IMAGES ARE NOT MAINTAINED AND DO NOT RECEIVE SECURITY UPDATES !!!</h6>


<h1>
<?php 
$ip_server = $_SERVER['SERVER_ADDR']; 
$ip_port = $_SERVER['SERVER_PORT'];
echo "Server : $ip_server  -  Port : $ip_port"; 
?></h1>


<p style="background-color:darkgrey">00-DEFAULT</p>


<h3>DATABASE</h3>
<p class="aligncenter">
<img src="./images/3t-database.png" alt="Database" width="240"
         height="240" class="center">
</p>
<h3>DATABASE</h3>


<h4>APP</h4>
<p class="aligncenter">
<img src="./images/3t-app.png" alt="Database" width="240"
         height="240 class="center"">
</p>
<h4>APP</h4>


<h5>WEB</h5>
<p class="aligncenter">
<img src="./images/3t-web.png" alt="Database" width="240"
         height="240" class="center">
</p>
<h5>WEB</h5>


<h2>
<?php 
echo "Client: ";
echo  $_SERVER['REMOTE_ADDR'];
?></h2>


Jason Meers - 2020
</body>
</html> 