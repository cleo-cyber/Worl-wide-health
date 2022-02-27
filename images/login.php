<?php
$host= $_POST["localhost"];
$dbUsername=$_POST["root"];
$dbPassword=$_POST[""];
$dbName= $_POST["userregistration"];

if(!empty($dbUsername) && !empty($dbPassword)){
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="userregistration";
$conn = new mysql_connect($host,$dbUsername,$dbPassword,$dbName);
echo "Welcome";
}
else{
	echo "All fields are required";
	die();
}
?>