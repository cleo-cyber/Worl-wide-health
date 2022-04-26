<?php

session_start();
include 'connect.php';
if(isset($_POST["login"])){


    if(empty($_POST["email"]) || empty($_POST["Password"])){

        header("location: adminLogin.php?Empty= Please fill in the blanks");

    }else{
        $sql="SELECT * FROM adlogib where email='".$_POST["email"]."' AND P_assword='".$_POST["Password"]."'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['email']=$_POST["email"];
            header("location:admin.php");
        }
        else{
            header("location:adminLogin.php?Invalid=Please enter correct email and password");
        }
    }

}

?>