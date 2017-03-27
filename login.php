
<?php
session_start();
$connect=mysqli_connect('localhost','root','','physical');
if(!$connect){
	echo"No connection";
	exit();
}

if(isset($_POST['login'])){
	
$id= $_POST['id'];
$password= $_POST['password'];


$query = mysqli_query($connect,"SELECT * FROM loginInfo WHERE id='$id' AND password ='$password';");
	$numrows = mysqli_num_rows($query);
	if($numrows == 1){
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $password;
	    $_SESSION['type'] = $type;
		header('location: worker.php');
	}
	else{
		echo '<Strong>username or password is incorrect</strong>';
	    }
   }
?>


<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
 <link rel="stylesheet" href="physicalPlant.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js "></script>
<title>LOGIN</title>
</head>
<body>

<nav id="top_menu">
<ul>
<header><h1><img src="" height="100px" width="100px" />PHYSICAL PLANT DEPARTMENT</h1></header>
<li> <a href="index.php">HOME</a></li>
<li> <a href="">ABOUT US</a></li>
<li> <a href="">CONTACT US</a></li>
<li style="float:right"> <a href="">ACCOUNT</a></li>
</ul>
</nav>

<center>
<br><br><br><br>
<form name="workerLogin" method="post">
<header><h3>WORKER LOGIN</h3></header>
<label for="id" style="font-size:16px"> ID  </label>
<input type="text" name="id" pattern="^[A-Za-z\d\.]{1,}$" title="ENTER CORRECT ID!" required autofocus>
<br>


<label for="Password" style="font-size:16px">PASSWORD</label>
<input type="password" name="password" title="ENTER CORRECT PASSWORD!" autocomplete="off" required>
<br>
<button type="submit" name="login" data-role="trigger-validation">LOGIN</button>


</center>

</form>
</body>
<style>
label{
	width:100px;
	
	font-family:"Tahoma";
	padding-right:10px;
	text-align:right;
}
h3{line-height: 1.8;
font-size:30px;
font-family:"Tahoma";
display: block;
}

h1{
	color:white;
}
form{
	padding-top:20px;
	max-width:620px;
	background-color:#fff;
	border:2px solid rgba(0,0,0,0.1);
	padding:15px 35px 45px;
	margin:0 auto;
	height:420px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
button[name=login] {
       width:50%;
   padding-top: 20px;
    background-color: #4CAF50;
    -webkit-box-flex:1;
    color: white;
    padding: 14px 20px;
    margin: 16px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
     box-sizing: border-box;
	  font-family:"Times New Roman";
	  font-size:20px;
	  display: inline-block;
	  
}
input[type=text] ,input[type=password]{
	 width:50%;
   -webkit-box-flex:1;
    padding: 14px 20px;
    margin: 16px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-family:"Times New Roman";
	  font-size:20px;
   }
</style>


</html>