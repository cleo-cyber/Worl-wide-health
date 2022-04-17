<?php
include 'connect.php';
if(isset($_GET['deleteid']))
$id=$_GET['deleteid'];

$sql="DELETE FROM `adoctor` where doctor_id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: display.php");
}
else{
    die("connection failed".mysqli_connect_error());
}

?>