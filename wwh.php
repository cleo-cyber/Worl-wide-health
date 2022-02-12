<?php
$host= $_POST["localhost"];
$dbUsername=$_POST["root"];
$dbPassword=$_POST[""];
$dbName= $_POST["registry"];

if(!empty($dbUsername) && !empty($dbPassword)){
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="registry";
$conn = new mysql_connect($host,$dbUsername,$dbPassword,$dbName);

}
else{
	echo "All fields are required";
	die();
}
?>