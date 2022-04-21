<?php
$firsname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$weight=$_POST["Weight"];
$dissoder=$_POST["dissoder"];
$lastDonation=$_POST["last"];
$age=$_POST["age"];
$blood=$_POST["blood"];
$email=$_POST["email"];
$Phone=$_POST["Phone"];
$location=$_POST["location"];

if($age<18){
    echo "Illegible for donation";
}
elseif($lastDonation>0 && $lastDonation<112){
    echo "Too early for another donation";
}
elseif($lastDonation==0)
{
    // echo '<script>alert("Thank you for volunteering We will contact you on the donation date")</script>';
    header("location:donation.html");
}
elseif($dissoder=="Yes"){
    echo "<label>What is the dissoder?</> <br/>";
    echo "<input type=\"text\" name=\"dissoder\">";
}
elseif($age<18 && $lastDonation<112){
    echo "Illegible for donation";
}
else{
    //  echo '<script>alert("Thank you for volunteering We will contact you on the donation date")</script>';
    
    header("location:donation.html");
}
$server="localhost";
$username="root";
$password="";
$dbname="hospitalsystem";
$conn=new mysqli($server,$username,$password,$dbname);
if(!$conn){
    die("connection failed: ".$conn->connect_error);
}


$sql="INSERT INTO donation(firstname, lastname, _location, blood, email, phone, age, dissoder, _weight,lastdonation) VALUES('$firsname','$lastname','$location','$blood','$email','$Phone','$age','$dissoder','$weight','$lastDonation')";
$result=mysqli_query($conn,$sql);

if(!$result){
    die("connection failed: ".$conn->connect_error);

}



