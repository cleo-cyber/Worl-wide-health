<?php
$server='localhost';
$username='root';
$passowrd="";
$dbname='hospitalsystem';
$conn= mysqli_connect($server,$username,$passowrd,$dbname);
if(!$conn)
{
    die("connection error : " .mysqli_connect_error());
}
else{
    echo "welcome";
}

if(isset($_POST['submit']))
{
    $name=$_POST['Username'];
     $message=$_POST['message'];

     $sql="INSERT INTO comments(name,message")
     VALUES($name,$message);
     $result=mysqli_query($conn,$sql);
 
     if($result){
        echo "<script>alert('comments added successfully.')</script>";

     }
     else{
        echo "<script>alert('comments does not add.')</script>";
     }
}
?>