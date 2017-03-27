<?php
session_start();
$connect=mysqli_connect('localhost','root','','physical');
if(!$connect){
	echo"No connection";
	exit();
}

?>


<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width,initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="">
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js "></script>
<title>HOMEPAGE</title>
</head>
<body>
<nav id="top_menu">
<ul>
<center><header><h1><img src="" height="100px" width="100px" />PHYSICAL PLANT DEPARTMENT</h1></header></center>
<li> <a href="index.php">HOME</a></li>
<li> <a href="complaint.php">COMPLAINTS</a></li>
<li> <a href="login.php">WORKER</a></li>
<li style="float:right"> <a href="index.php">LOGOUT</a></li>
</ul>
</nav>
</body>
<style>
h1{
	color:white;
}

ul {
  
    list-style-type: none;
    margin: 0;
    padding: 0;
	background-color: #111;
	overflow: hidden;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.active {
    background-color: #4CAF50;
}


li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #4CAF50;
    color: white;
}
li a:hover {
    background-color: #4CAF50;
	color:white;
}
</style>


</html>