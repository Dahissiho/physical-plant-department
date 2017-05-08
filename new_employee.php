<?php
session_start();
// Create connection
$hostName = '127.0.0.1';
$userName = 'root';
$password = '';
$id = '';
$firstname = '';
$lastname = '';
$department = '';
$email = '';
$telephone = '';
$dbName   = 'physicalplantdb';
$error_message = 'Couldn\'t connect!';
$error_message1 = 'Couldn\'t connect comment!';


if(!empty ($_POST['ID']) && ($_POST['Fname']) && ($_POST['Lname']) && ($_POST['Department']) && ($_POST['Email'])&& ($_POST['Telephone']) &&($_POST['Password']) or die($error_message)){
$mysqli = new mysqli("localhost", "root", "", "physicalplantdb");

if(!mysqli_connect_errno() or die($error_message1)){
	
	$password = $_POST['Password'];
	$id = $_POST['ID'];
	$firstname =  $_POST['Fname'];
	$lastname =  $_POST['Lname'];
	$department =  $_POST['Department'];
	$email =  $_POST['Email'];
	$telephone =  $_POST['Telephone'];
	
	//$id = "SELECT ID FROM worker ORDER BY ID DESC LIMIT 1";
	
	/*if($id){
		$id ="17-MAM-001";
		$id_lenght = strlen($id);
		$ans = strpos($id,$id_lenght,2); 
		
		$id = $id.ar
		while($ans<$id_lenght){
			
			$id = $id[$ans];
			$ans = $ans + 1;
		    
		}
		echo'<h1>$id</h1>';
		}else{
			echo'not blalal';
			exit(0);
			}*/
	
	$result = $mysqli->query("INSERT INTO worker (ID, Lname, Fname, Jodid, Departname, Dob, position, email, telephone, password) VALUES('".$_POST['ID']."','".$_POST['Lname']."','".$_POST['Fname']."''".$_POST['Department']."','".$_POST['DoB']."','".$_POST['Email']."','".$_POST['Telephone']."','".$_POST['Password']."')");
	
	
if($result){
require('new_employee.html');
		echo'<h4 style="color:#F60"> informations stored</h4>';	
}else{
	require('new_employee.html');
		echo'<h4 style="color:#F60"> informations not stored</h4>';	
		echo $mysqli->error;
	}
   }
}
//echo $row ;
//echo htmlentities($row['message']);
?>