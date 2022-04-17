<?php
include 'connect.php';
$id=$_GET['updateid'];
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['Email'];
	$department=$_POST['Department'];
	$phone=$_POST['Mobile'];
	$pass=$_POST['Password'];

	$sql="UPDATE `adoctor` set doctor_id=$id,d_name='$name',d_email='$email',department='$department',mobile='$phone',d_password='$pass' where doctor_id=$id";

	$result=mysqli_query($conn,$sql);
	if (!$result) {
		die("connection failed".mysqli_connect_error());
	}
	else{
		header("location:display.php");
        // echo "updated successfully";
	}
	
}
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	
    	form{
    		margin-top: 10vh;
    		margin-right: 2vw;
    		margin-left: 2vw;
    		margin-bottom: 10vh;
    	}
    	form label{
    		margin-top: 2vh;
    	}

    </style>
    <title>Add doctor</title>
  </head>
  <body>
   <div class="container">
   	
   	<form method="post">
 	 <div class="form-group">
		<label  class="form-label">Full Name</label>
		<input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off">
	</div>
	<div class="form-group">
		<label  class="form-label">Email</label>
		<input type="email" class="form-control" placeholder="Enter Email" name="Email" autocomplete="off">
	</div>
	<div class="form-group">
		<label  class="form-label">Department</label>
		<input type="text" class="form-control" placeholder="Enter Department" name="Department" autocomplete="off">
	</div>
	<div class="form-group">
		<label  class="form-label">Mobile number</label>
		<input type="text" class="form-control" placeholder="Enter phone number" name="Mobile" autocomplete="off">
	</div>

	<div class="form-group">
		<label  class="form-label">Password</label>
		<input type="text" class="form-control" placeholder="Enter password" name="Password" autocomplete="off">
	</div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
   </div>

  </body>
</html>
