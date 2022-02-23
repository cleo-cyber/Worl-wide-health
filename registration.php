<?php
$dbServer="localhost";
$dbUsername="root";
$password= "";
$dbName="userregistration";
$conn=mysqli_connect($dbServer,$dbUsername,$password,$dbName);

if(!$conn){
	die("Connection Faile: " .mysqli_connect_error());
}
else{
	echo "Connection successful";
}
mysqli_close($conn);
?>