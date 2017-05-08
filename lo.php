<?php

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
 
$mysqli = new mysqli("localhost", "root", "", "physicalplantdb");

if(!mysqli_connect_errno() or die($error_message)){
	
	
	$query="SELECT * FROM worker";
	$result=$mysqli->query($query);
	$num= $result->num_rows;
	

 $label = '<table><tr><th>First name</th></tr></table>';
 //echo $label;	
	while ($row = $result->fetch_assoc()) {
       

    echo'<tr>';
	echo'<th>';
	echo $row["Fname"];
	echo'</th>';	

  
	echo'<th>';
	echo $row["Lname"];
	echo'</th>';
	
	echo'<th>';
	echo $row["Department"];
	echo'</th>';
    
	echo'<th>';
	echo $row["Telephone"];
	echo'</th>';
  
	echo'<th>';
	echo $row["ID"];
	echo'</th>';
   	echo'</tr>';
	}
	
	}
 

	?>