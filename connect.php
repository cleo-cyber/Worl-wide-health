<?php
$dbserver="localhost";
$dbuser="root";
$password="";
$dbname="hospitalsystem";

$conn=mysqli_connect($dbserver,$dbuser,$password,$dbname);
if (!$conn) {
	die("connection failed".mysqli_connect_error());
}

$sql="SELECT * FROM `adoctor`";

$result=mysqli_query($conn,$sql);


$name=$email=$department=$phone=$pass=$emailError="";

$passError=$nameErr=$deptError="";
function test($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
//form validation for adding doctors
// if($_SERVER["REQUEST_METHOD"]=="POST"){

//     if(empty($name))
//     {
//         $nameErr="Name field required";
//     }
//     else{
//         $name=test($_POST["name"]);
//     }

//     if(empty($email))
//     {
//         $emailError="field required";
//     }
//     else{
//         $email=test($_POST["Email"]);
//     }
    
//     if(empty($department))
//     {
//         $deptError=" field required";
//     }
//     else{
//         $email=test($_POST["Email"]);
//     }

//     $department=test($_POST["Department"]);
//     $phone=test($_POST["Mobile"]);
//     $pass=test($_POST["Password"]);

//     if($pass<8){
//         $passError="Password too short";
//     }
    
// }


//Posting data from add doctor to the database
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['Email'];
	$department=$_POST['Department'];
	$phone=$_POST['Mobile'];
	$pass=$_POST['Password'];

	$sql= "INSERT INTO `adoctor`(d_name, d_email, department, mobile, d_password)
	VALUES('$name','$email','$department','$phone','$pass')";

	$result=mysqli_query($conn,$sql);
	if (!$result) {
		die("connection failed".mysqli_connect_error());
	}
	
}


?>