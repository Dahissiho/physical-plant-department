<?php
session_start();
// Create connection
$hostName = '127.0.0.1';
$userName = 'root';
$password = '';
$username = '';
$dbName   = 'physicalplantdb';
$error_message = 'Couldn\'t connect!';


if(!empty ($_POST['password']) && ($_POST['username']) or die($error_message)){
$mysqli = new mysqli("localhost", "root", "", "physicalplantdb");

if(!mysqli_connect_errno() or die($error_message)){
	
	$_SESSION['PASSWORD'] = $_POST['password'];
	$_SESSION['USERNAME'] = $_POST['username'];
	$result = $mysqli->query("SELECT password FROM director WHERE ID = '".$_SESSION['USERNAME']."' AND password ='".$_SESSION['PASSWORD']."'  ");
	// if count is not null then the user is the administrator
	$count = $result->num_rows;
	if($count != 0){
		$result->free();
		$mysqli->close();
		header('location: http://localhost/Physical plant/supervisor page.html');
		}else if($count == 0){
		
		$result = $mysqli->query("SELECT password FROM supervisor WHERE ID = '".$_SESSION['USERNAME']."' AND password ='".$_SESSION['PASSWORD']."' ");
	// if count is not null then the user is a supervisor	
	$count = $result->num_rows;
	if($count != 0){
		$result->free();
		$mysqli->close();
		header('location: http://localhost/Physical plant/supervisor page.html');
		}else if($count == 0){
		$result = $mysqli->query("SELECT password FROM supervisor WHERE ID = '".$_SESSION['USERNAME']."' AND password ='".$_SESSION['PASSWORD']."'  ");
		// if count is not null then the user is a worker
	$count = $result->num_rows;
	if($count != 0){
		$result->free();
		$mysqli->close();
		header('location: http://localhost/Physical plant/worker page.html');
		}
		
	
		$result->free();
		$mysqli->close();
		require('login.html');
		echo'<h4 style="color:#F60">your password is not correct</h4>';
		}
		}
		/*else{
			header('location: http://localhost/Physical plant/supervisor page.html');
			//echo'password incorrect';
			
		}*/
   }
}
//echo $row ;
//echo htmlentities($row['message']);

?>