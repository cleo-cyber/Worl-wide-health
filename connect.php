<?php
$dbserver="localhost";
$dbuser="root";
$password="";
$dbname="hospitalsystem";

$conn=mysqli_connect($dbserver,$dbuser,$password,$dbname);
if (!$conn) {
	die("connection failed".mysqli_connect_error());
}

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['Email'];
	$department=$_POST['Department'];
	$phone=$_POST['Mobile'];
	$pass=$_POST['Password'];

	$sql= "INSERT INTO `adoctor`(d_name, d_email, department, mobile, password)
	VALUES('$name','$email','$department','$phone','$pass')";

	$result=mysqli_query($conn,$sql);
	if (!$result) {
		die("connection failed".mysqli_connect_error());
	}
	
}


?>