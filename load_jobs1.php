<?php

// Create connection
$hostName = '127.0.0.1';
$userName = 'root';
$password = '';
$id = '';
$id2 = '';
$dbName   = 'physicalplantdb';
$error_message = 'Couldn\'t connect!';
 $s1 = '<table  width="100%" height="10%" cellspacing="2" cellpadding="2"><tr style="background-color:#FFC"><td><div align="center"><h2>PHYSICAL';  
 
 $s2 = 'PLANTDEPARTMENT</h2></div></td></tr></table>';
 
 echo  $s1 ;
 echo  $s2;
 
$mysqli = new mysqli("localhost", "root", "", "physicalplantdb");

if(!mysqli_connect_errno() or die($error_message)){
	
	
	$query="SELECT * FROM jobs";
	$result=$mysqli->query($query);
	$num= $result->num_rows;
	
	$id = 1;
	$id2 = 10;

	?>
    
<html>
<head>
<script language="javascript" type="text/javascript" src="load_jobs.js">

</script>
<style>
tr:hover{
	background-color:#0FF;
	}

.size {
	
	
	display:block;
	position:relative;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	margin-left:70x;
	}
	.dropdown {
    position: relative;
    display: block;
}
	


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

	
	.dropdown {
    position: relative;
    display: block;
}

.dropdown-content {
    display: none;
    position: fixed;
    background-color: #333;
    min-width: 160px;
	margin-left:68px;
	margin-top:46px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .li {
    background-color: #3e8e41;
}
</style>
</head>
<body >

<ul>
  <li><a href="supervisor page.html">Home</a></li>
  
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

<table style="border:2px solid #ccc; border-radius:4px; box-sizing: border-box; position:relative; margin-top:100PX; margin-left:90PX" id="jobs" width="80%" cellspacing="1" cellpadding="10">
  <tr style="background-color:#CCC">
   <th scope="col" onClick="o()">Location</th>
   <th scope="col">Work type</th>
    <th scope="col" onClick="makerequest('lo.php','one')">Officer</th>
    <th scope="col">Departement</th>
    <th scope="col">Date</th>
    
    
  </tr>
  	
	<?php while ($row = $result->fetch_assoc()) {?>
   
    <tr id="<?php print($id2) ?>" onClick="makerequest('lo.php','<?php print($id) ?>',<?php print($id2) ?>)">
    
	<th >
	<?php echo $row["Location"];?>
	</th>
   
 
	<th>
	<?php echo $row["Work_type"];?>
	</th>
    
	
	
	<th>
	<?php echo $row["Officer"];?>
	</th>
    
	
	<th>
	<?php echo $row["Department"];?>
	</th>
  
	
	<th >
	<?php echo $row["Date"];?>
    </th>
    
     <th style="display:none">
	<?php echo $row["ID"];?>
	</th>
    
    </tr >
    <tr id="label"></tr>
    
   <tr id="<?php  print($id) ?>" >
    </tr>
   <?php $id++; $id2++; ?>
	<?php }?> 
    
   
	</table>
	<?php }?>
   </body> 
 </html>

