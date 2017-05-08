<<<<<<< HEAD
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
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
</style>
</head>
<body>
<table  width="100%" height="10%">
<tr style="background-color:#FFC">
<td><div align="center"><h2>PHYSICAL PLANT DEPARTMENT</h2></div></td>
</tr>
</table>
<ul>
  <li><a href="supervisor page.html">Home</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

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
	
	
	/*if($num == 0){
		echo'nothing in the table';
		}
	$i=0;*/
	
//	while ($i < $num) {
		
	//$variable=mysql_result($result,$i,"Fname");
	
			echo'<table style="border:2px solid #ccc; border-radius:4px; box-sizing: border-box; position:relative; margin-top:100PX; margin-left:90PX" id="jobs" width="80%" cellspacing="1" cellpadding="10">';
  echo'<tr>';
   echo '<th scope="col">First name</th>';
   echo '<th scope="col">Last name</th>';
    echo'<th scope="col">Department</th>';
    echo'<th scope="col">Telephone</th>';
    echo'<th scope="col">ID</th>';
  echo'</tr>';
	
	while ($row = $result->fetch_assoc()) {
        //printf ("%s %s %s\n", $row["Fname"], $row["Position"], $row["Telephone"]);
		

	

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
	echo'</table>';
	}
 


	?>

</body>
</html>
=======
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
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
</style>
</head>
<body>
<table  width="100%" height="10%">
<tr style="background-color:#FFC">
<td><div align="center"><h2>PHYSICAL PLANT DEPARTMENT</h2></div></td>
</tr>
</table>
<ul>
  <li><a href="supervisor page.html">Home</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

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
	
	
	/*if($num == 0){
		echo'nothing in the table';
		}
	$i=0;*/
	
//	while ($i < $num) {
		
	//$variable=mysql_result($result,$i,"Fname");
	
			echo'<table style="border:2px solid #ccc; border-radius:4px; box-sizing: border-box; position:relative; margin-top:100PX; margin-left:90PX" id="jobs" width="80%" cellspacing="1" cellpadding="10">';
  echo'<tr>';
   echo '<th scope="col">First name</th>';
   echo '<th scope="col">Last name</th>';
    echo'<th scope="col">Department</th>';
    echo'<th scope="col">Telephone</th>';
    echo'<th scope="col">ID</th>';
  echo'</tr>';
	
	while ($row = $result->fetch_assoc()) {
        //printf ("%s %s %s\n", $row["Fname"], $row["Position"], $row["Telephone"]);
		

	

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
	echo'</table>';
	}
 


	?>

</body>
</html>
>>>>>>> origin/master
