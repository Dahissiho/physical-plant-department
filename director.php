<?php
session_start();
$connect=mysqli_connect('localhost','root','root','physical');
if(!$connect){
	echo"No connection";
exit();
}
if (!isset($_SESSION['id'])) {
header('Location: login.php');
}
$id = $_SESSION['id'];
$q = mysqli_query($connect, "SELECT type FROM logininfo WHERE id='$id'");
$qr = mysqli_fetch_assoc($q);

$type = $qr['type'];

if($type == 'worker'){
	header ('Location: worker.php');
}
else if($type == 'supervisor'){
	header ('Location: supervisor.php');
}

?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Director Page</title>
</head>
<body>
<nav id="top_menu">
<ul>
<center><header><h1>PHYSICAL PLANT DEPARTMENT</h1></header></center>
<b> Director</b>


<li style="float:right"> <a href="logout.php">LOGOUT</a></li>
</ul>
</nav>


<form method="POST">
<div class="masonry">
 <button type="button" class="btn" data-toggle="modal" data-target="#myModal">VIEW COMPLAINTS</button>

 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SELECT THE DEPARTMENT</h4>
      </div>
      <div class="modal-body">
	  <center>
        <button type="submit" name="btn_mas" class="btn_report">MASONRY</button>
		<br>
		<button type="submit" name="btn_elec" class="btn_report">ELECTRICALS</button>
		<br>
		<button type="submit" name="btn_plu" class="btn_report">PLUMBING</button>
		<br>
		<button type="submit" name="btn_car" class="btn_report">CARPENTRY</button>
		<br>
		<button type="submit" name="btn_oth" class="btn_report">OTHERS</button>
		</center>
		<br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btnClose" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</form>

<?php
	 if(isset($_POST['btn_mas'])){
			$sql = "SELECT facility,location,date,telephone,work_type,description,remarks,officer FROM masonry ORDER BY Mid";
$result = $connect->query($sql);
if	($result->num_rows >0 )
		echo"<center>
	<h3>COMPLAINTS(MASONRY DEPARTMENT)</h3><br>
	<table>
<tr>
<th>FACILITY</th>
<th>LOCATION</th>
<th>DATE</th>
<th>TELEPHONE</th>
<th>TYPE OF WORK</th>
<th>WORK DESCRIPTION</th>
<th>REMARKS</th>
<th>OFFICER REQUESTING</th>
</tr>";	
while ($row = $result->fetch_assoc())
    {
		echo"<tr><td> ".$row["facility"]."</td><td>".$row["location"]."</td><td>".$row["date"]."</td><td>".$row["telephone"]."</td><td>".$row["work_type"]."</td><td>".$row["description"]."</td><td>".$row["remarks"]."</td><td>".$row["officer"]."</td></tr>";
	}
	echo "</center></table>";
		}
else if (isset($_POST['btn_elec'])){
			$sql = "SELECT facility,location,date,telephone,work_type,description,remarks,officer FROM electricals ORDER BY Eid";
$result = $connect->query($sql);
if	($result->num_rows >0 )
		echo"<center>
	<h3>COMPLAINTS(ELECTRICAL DEPARTMENT)</h3><br>
	<table>
<tr>
<th>FACILITY</th>
<th>LOCATION</th>
<th>DATE</th>
<th>TELEPHONE</th>
<th>TYPE OF WORK</th>
<th>WORK DESCRIPTION</th>
<th>REMARKS</th>
<th>OFFICER REQUESTING</th>
</tr>";	
while ($row = $result->fetch_assoc())
    {
		echo"<tr><td> ".$row["facility"]."</td><td>".$row["location"]."</td><td>".$row["date"]."</td><td>".$row["telephone"]."</td><td>".$row["work_type"]."</td><td>".$row["description"]."</td><td>".$row["remarks"]."</td><td>".$row["officer"]."</td></tr>";
	}
	echo "</center></table>";
		}
else if(isset($_POST['btn_plu'])){
			$sql = "SELECT facility,location,date,telephone,work_type,description,remarks,officer FROM plumbing ORDER BY Pid";
$result = $connect->query($sql);
if	($result->num_rows >0 )
		echo"<center>
	<h3>COMPLAINTS(PLUMBING DEPARTMENT)</h3><br>
	<table>
<tr>
<th>FACILITY</th>
<th>LOCATION</th>
<th>DATE</th>
<th>TELEPHONE</th>
<th>TYPE OF WORK</th>
<th>WORK DESCRIPTION</th>
<th>REMARKS</th>
<th>OFFICER REQUESTING</th>
</tr>";	
while ($row = $result->fetch_assoc())
    {
		echo"<tr><td> ".$row["facility"]."</td><td>".$row["location"]."</td><td>".$row["date"]."</td><td>".$row["telephone"]."</td><td>".$row["work_type"]."</td><td>".$row["description"]."</td><td>".$row["remarks"]."</td><td>".$row["officer"]."</td></tr>";
	}
	echo "</center></table>";
		}
else if(isset($_POST['btn_car'])){
			$sql = "SELECT facility,location,date,telephone,work_type,description,remarks,officer FROM carpentry ORDER BY Cid";
$result = $connect->query($sql);
if	($result->num_rows >0 )
		echo"<center>
	<h3>COMPLAINTS(CARPENTRY DEPARTMENT)</h3><br>
	<table>
<tr>
<th>FACILITY</th>
<th>LOCATION</th>
<th>DATE</th>
<th>TELEPHONE</th>
<th>TYPE OF WORK</th>
<th>WORK DESCRIPTION</th>
<th>REMARKS</th>
<th>OFFICER REQUESTING</th>
</tr>";	
while ($row = $result->fetch_assoc())
    {
		echo"<tr><td> ".$row["facility"]."</td><td>".$row["location"]."</td><td>".$row["date"]."</td><td>".$row["telephone"]."</td><td>".$row["work_type"]."</td><td>".$row["description"]."</td><td>".$row["remarks"]."</td><td>".$row["officer"]."</td></tr>";
	}
	echo "</center></table>";
		}
else if(isset($_POST['btn_oth'])){
			$sql = "SELECT facility,location,date,telephone,work_type,description,remarks,officer FROM others ORDER BY Oid";
$result = $connect->query($sql);
if	($result->num_rows >0 )
		echo"<center>
	<h3>COMPLAINTS(OTHERS)</h3><br>
	<table>
<tr>
<th>FACILITY</th>
<th>LOCATION</th>
<th>DATE</th>
<th>TELEPHONE</th>
<th>TYPE OF WORK</th>
<th>WORK DESCRIPTION</th>
<th>REMARKS</th>
<th>OFFICER REQUESTING</th>
</tr>";	
while ($row = $result->fetch_assoc())
    {
		echo"<tr><td> ".$row["facility"]."</td><td>".$row["location"]."</td><td>".$row["date"]."</td><td>".$row["telephone"]."</td><td>".$row["work_type"]."</td><td>".$row["description"]."</td><td>".$row["remarks"]."</td><td>".$row["officer"]."</td></tr>";
	}
	echo "</center></table>";
		}	

$connect->close();
		?>
</body>

<style>
nav{max-width:100%;}
h1{
	font-weight:bold;
	color:white;
}
h4,h3{
	font-family: arial, sans-serif;
	font-weight:bold;
	text-align:center;
	font-size:20px;
}
b{
	float:left;
	color:white;
	font-size:14px;
}
li {
    float: left;
	font-size:12px;
}
ul {
  
    list-style-type: none;
    margin: 0;
    padding: 0;
	background-color: #111;
	overflow: hidden;
}
li a {
	font-family:"Tahoma";
	font-weight:bold;
    display: block;
    color: white;
    text-align: center;
    padding: 4px 10px;
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
.modal-header {
    padding: 12px 16px;
    background-color:#2196F3;
    color: white;
}

.modal-body {
	padding: 2px 10px;
	}
button[class=btn_report]{
	width:25%;
	 padding: 8px 20px;
    margin: 8px 10px;
	 border: 2px solid #2196F3;
    border-radius: 4px;
	background-color:#2196F3;
	color:white;
}

button[id=btnClose] {
    background-color:#f62b2b;
    color: white;
    border-radius: 4px;
	 font-weight:bold;
}
button[id=btnClose]:hover{
      background-color:#f80707;
	  color:white;
    }
	.close {
    color:white;
    float: right;
    font-size: 25px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #f80707;
    text-decoration: none;
    cursor: pointer;
}
table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width:95%;
				text-align:center;
				font-size:14px;
				
            }

            td, th {
                border: 2px solid black;
                text-align: center;
                padding: 8px;
				
            }
			 tr:nth-child(even) {
                background-color: white;
                     }
</style>

</html>
