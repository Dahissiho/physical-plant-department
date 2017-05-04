<?php
session_start();
$connect=mysqli_connect('localhost','root','root','physical');
if(!$connect){
	echo"No connection";
	exit();
}
     if(isset($_POST['masonSubmit'])){
	$facility=$_POST['facility'];
	$location=$_POST['location'];
	$date=$_POST['date'];
	$telephone=$_POST['telephone'];
	$type=$_POST['type'];
	$description=$_POST['description'];
	$remarks=$_POST['remarks'];
	$officer=$_POST['officer'];
	
	$sql= "INSERT INTO masonry (facility,location,date,telephone,work_type,description,remarks,officer) 
	VALUES ('$facility','$location','$date','$telephone','$type','$description','$remarks','$officer')";
	
	if (mysqli_query($connect,$sql)){

echo "<script>alert('Your Complaint Has Successfully been Sent!');</script>";
}
else{
echo "<script>alert('Oops an Error occured!');</script>";
}
	}
else if(isset($_POST['elecSubmit'])){
		
	$facility=$_POST['facility'];
	$location=$_POST['location'];
	$date=$_POST['date'];
	$telephone=$_POST['telephone'];
	$type=$_POST['type'];
	$description=$_POST['description'];
	$remarks=$_POST['remarks'];
	$officer=$_POST['officer'];
	
	$sql= "INSERT INTO electricals (facility,location,date,telephone,work_type,description,remarks,officer) 
	VALUES ('$facility','$location','$date','$telephone','$type','$description','$remarks','$officer')";
	
	if (mysqli_query($connect,$sql)){

echo "<script>alert('Your Complaint Has Successfully been Sent!');</script>";
}
else{
echo "<script>alert('Oops an Error occured!');</script>";
}
	}
else if(isset($_POST['plumbSubmit'])){
		
	$facility=$_POST['facility'];
	$location=$_POST['location'];
	$date=$_POST['date'];
	$telephone=$_POST['telephone'];
	$type=$_POST['type'];
	$description=$_POST['description'];
	$remarks=$_POST['remarks'];
	$officer=$_POST['officer'];
	
	$sql= "INSERT INTO plumbing (facility,location,date,telephone,work_type,description,remarks,officer) 
	VALUES ('$facility','$location','$date','$telephone','$type','$description','$remarks','$officer')";
	
	if (mysqli_query($connect,$sql)){

echo "<script>alert('Your Complaint Has Successfully been Sent!');</script>";
}
else{
echo "<script>alert('Oops an Error occured!');</script>";
}
	}
else if(isset($_POST['carpSubmit'])){
		
	$facility=$_POST['facility'];
	$location=$_POST['location'];
	$date=$_POST['date'];
	$telephone=$_POST['telephone'];
	$type=$_POST['type'];
	$description=$_POST['description'];
	$remarks=$_POST['remarks'];
	$officer=$_POST['officer'];
	
	$sql= "INSERT INTO carpentry(facility,location,date,telephone,work_type,description,remarks,officer) 
	VALUES ('$facility','$location','$date','$telephone','$type','$description','$remarks','$officer')";
	
	if (mysqli_query($connect,$sql)){

echo "<script>alert('Your Complaint Has Successfully been Sent!');</script>";
}
else{
echo "<script>alert('Oops an Error occured!');</script>";
}
	}
else if(isset($_POST['otherSubmit'])){
		
	$facility=$_POST['facility'];
	$location=$_POST['location'];
	$date=$_POST['date'];
	$telephone=$_POST['telephone'];
	$type=$_POST['type'];
	$description=$_POST['description'];
	$remarks=$_POST['remarks'];
	$officer=$_POST['officer'];
	
	$sql= "INSERT INTO others (facility,location,date,telephone,work_type,description,remarks,officer) 
	VALUES ('$facility','$location','$date','$telephone','$type','$description','$remarks','$officer')";
	
	if (mysqli_query($connect,$sql)){

echo "<script>alert('Your Complaint Has Successfully been Sent!');</script>";
}
else{
echo "<script>alert('Oops an Error occured!');</script>";
}
}
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<title>Complaint Page</title>
</head>
<body>
<nav id="top_menu">

<ul>
<header><h1>PHYSICAL PLANT DEPARTMENT</h1></header>
<li> <a href="index.php">HOME</a></li>
</ul>
</nav>
<center>
<br><br>
<div id="main">
<h2>SELECT THE DEPARTMENT</h2>
<form name="masonry" method="POST">
<div class="masonry">
 <button type="button" class="btn" data-toggle="modal" data-target="#myModal">MASONRY</button>

 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MAINTENANCE REQUEST FORM(MASONRY)</h4>
      </div>
      <div class="modal-body">
        <label>FACILITY</label>
		<input type="text" name="facility" required autofocus/>
		<br>
		<label>LOCATION</label>
		<input type="text" name="location" required />
		<br>
		<label>DATE</label>
		<input type="date" name="date" required/>
		<br>
		<label>TELEPHONE</label>
		<input type="tel" name="telephone"  title="Please Enter A Correct Telephone Number" required/>
		<br>
		<label>TYPE OF WORK</label>
		<input type="text" name="type" list="types" required/>
		<datalist id="types">
		<option value="Walls"/>
		<option value="Tiling"/>
		<option value="Floor Slab"/>
		</datalist>
		<br><br>
		<label>WORK DESCRIPTION</label>
		<textarea name="description" rows="4" cols="30" required></textarea>
		<br>
		<label>REMARKS</label>
		<input type="text" name="remarks" required/>
		<br>
		<label>OFFICER REQUESTING(LASTNAME)</label>
		<input type="text" name="officer" required/>
		<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btnClose" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" id="masonSubmit" name="masonSubmit">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>
<form name="electricals" method="POST">
<div class="electricalWorks">
<button type="button" class="btn" data-toggle="modal" data-target="#elecModal">ELECTRICALS</button>
<div id="elecModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MAINTENANCE REQUEST FORM(ELECTRICALS)</h4>
      </div>
      <div class="modal-body">
        <label>FACILITY</label>
		<input type="text" name="facility" required autofocus/>
		<br>
		<label>LOCATION</label>
		<input type="text" name="location" required />
		<br>
		<label>DATE</label>
		<input type="date" name="date" required/>
		<br>
		<label>TELEPHONE</label>
		<input type="tel" name="telephone"  title="Please Enter A Correct Telephone Number" required/>
		<br>
		<label>TYPE OF WORK</label>
		<input type="text" name="type" list="Etypes" required/>
		<datalist id="Etypes">
		<option value="Lighting"/>
		<option value="Socket"/>
		<option value="Fan"/>
		</datalist>
		<br>
		<label>WORK DESCRIPTION</label>
		<textarea name="description" rows="4" cols="30" required></textarea>
		<br>
		<label>REMARKS</label>
		<input type="text" name="remarks" required/>
		<br>
		<label>OFFICER REQUESTING(LASTNAME)</label>
		<input type="text" name="officer" required/>
		<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btnClose" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" id="elecSubmit" name="elecSubmit" >Submit</button>
      </div>
    </div>
   </div>
  </div>
</div>
</form>
<form name="plumbing" method="POST">
<div class="plumbingWorks">
<button type="button" class="btn" data-toggle="modal" data-target="#plumbingModal">PLUMBING</button>
<div id="plumbingModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MAINTENANCE REQUEST FORM(PLUMBING)</h4>
      </div>
      <div class="modal-body">
        <label>FACILITY</label>
		<input type="text" name="facility" required autofocus/>
		<br>
		<label>LOCATION</label>
		<input type="text" name="location" required />
		<br>
		<label>DATE</label>
		<input type="date" name="date" required/>
		<br>
		<label>TELEPHONE</label>
		<input type="tel" name="telephone"  title="Please Enter A Correct Telephone Number" required/>
		<br>
		<label>TYPE OF WORK</label>
		<input type="text" name="type" list="Ptypes" required/>
		<datalist id="Ptypes">
		<option value="Water Closet"/>
		<option value="Wash Hand Basin"/>
		<option value="Pipes/Leakages"/>
		</datalist>
		<br>
		<label>WORK DESCRIPTION</label>
		<textarea name="description" rows="4" cols="30" required></textarea>
		<br>
		<label>REMARKS</label>
		<input type="text" name="remarks" required/>
		<br>
		<label>OFFICER REQUESTING(LASTNAME)</label>
		<input type="text" name="officer" required/>
		<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btnClose" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" id="plumbSubmit" name="plumbSubmit">Submit</button>
      </div>
    </div>
   </div>
  </div>
</div>
</form>
<form name="carpentry" method="POST">
<div class="carpentryWorks">
<button type="button" class="btn" data-toggle="modal" data-target="#carpentryModal">CARPENTRY</button>
<div id="carpentryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MAINTENANCE REQUEST FORM(CARPENTRY)</h4>
      </div>
      <div class="modal-body">
        <label>FACILITY</label>
		<input type="text" name="facility" required autofocus/>
		<br>
		<label>LOCATION</label>
		<input type="text" name="location" required />
		<br>
		<label>DATE</label>
		<input type="date" name="date" required/>
		<br>
		<label>TELEPHONE</label>
		<input type="tel" name="telephone"  title="Please Enter A Correct Telephone Number" required/>
		<br>
		<label>TYPE OF WORK</label>
		<input type="text" name="type" list="Ctypes" required/>
		<datalist id="Ctypes">
		<option value="Doors"/>
		<option value="Window/Louvers"/>
		<option value="Ceiling"/>
		</datalist>
		<br>
		<label>WORK DESCRIPTION</label>
		<textarea name="description" rows="4" cols="30" required></textarea>
		<br>
		<label>REMARKS</label>
		<input type="text" name="remarks" required/>
		<br>
		<label>OFFICER REQUESTING(LASTNAME)</label>
		<input type="text" name="officer" required/>
		<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btnClose" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" id="carpSubmit" name="carpSubmit">Submit</button>
      </div>
    </div>
   </div>
  </div>
</div>
</form>
<form name="other" method="POST">
<div class="otherWorks">
<button type="button" class="btn" data-toggle="modal" data-target="#othersModal">OTHERS</button>
<div id="othersModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MAINTENANCE REQUEST FORM(OTHERS)</h4>
      </div>
      <div class="modal-body">
        <label>FACILITY</label>
		<input type="text" name="facility" required autofocus/>
		<br>
		<label>LOCATION</label>
		<input type="text" name="location" required />
		<br>
		<label>DATE</label>
		<input type="date" name="date" required/>
		<br>
		<label>TELEPHONE</label>
		<input type="tel" name="telephone"  title="Please Enter A Correct Telephone Number" required/>
		<br>
		<label>TYPE OF WORK</label>
		<input type="text" name="type"required/>
		<br>
		<label>WORK DESCRIPTION</label>
		<textarea name="description" rows="4" cols="30" required></textarea>
		<br>
		<label>REMARKS</label>
		<input type="text" name="remarks" required/>
		<br>
		<label>OFFICER REQUESTING(LASTNAME)</label>
		<input type="text" name="officer" required/>
		<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="btnClose" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" id="otherSubmit" name="otherSubmit">Submit</button>
      </div>
    </div>
   </div>
  </div>
</div>
</div>
</form>
</center>
</body>

<style>

textarea[name=description]{
	width:50%;
	display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-family:"Tahoma";
	  font-size:12px;
}

div[id=main]{
	padding-top:2px;
	max-width:620px;
	background-color:#fff;
	border:2px solid rgba(0,0,0,0.1);
	padding:2px 15px 15px;
	margin:0 auto;
	height:500px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
.modal-header {
    padding: 12px 16px;
    background-color:#2196F3;
    color: white;
}

.modal-body {
	padding: 2px 10px;
	}


h2{line-height: 1.8;
font-size:25px;
font-weight:bold;
}
h4{ font-size:16px; font-family:"Times New Roman";font-weight:bold;}
h1{
	font-weight:bold;
	text-align:center;
	color:white;
}
input{
      width:50%;
   -webkit-box-flex:1;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-family:"Tahoma";
	  font-size:14px;
	 
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
	font-size:12px;
}
li a {
	font-family:"Tahoma";
	font-weight:bold;
    display: block;
    color: white;
    text-align: center;
    padding: 4px 12px;
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
label{
	font-family:"Tahoma";
	padding-right:10px;
	font-size:12px;
	width:190px;
	
	
}
button[class=btn]{
	background-color:black;
	color:#fff;
	 width:50%;
	  -webkit-box-flex:1;
    padding: 14px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 2px solid black;
    border-radius: 4px;
    box-sizing: border-box;
	font-family:"Times New Roman";
	  font-size:12px;
	  font-weight:bold;
}
 button[id=elecSubmit],button[id=masonSubmit],button[id=plumbSubmit],button[id=carpSubmit],button[id=otherSubmit] {
    background-color: #4CAF50;
    color: white;
    border-radius: 4px;
	font-weight:bold;
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
	button[type=submit]:hover{
		background-color:green;
		color:white;
	}

</style>
</html>