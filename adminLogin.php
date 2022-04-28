<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family:'Poppins', sans-serif;
}

body{
    line-height: 1.5em;

}

/* #login{
    display: flex;
    
} */
form{
    width: 35vw;
    height: 100%;
    position: fixed;
    /* background-color: #f4f4f4; */
    margin-left: 5vw;
    margin-top: 20vh;
}

form label{
    display: block;
    margin-top: 5vh;
}

form input{
    width: 25vw;
    height: 5vh;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    margin-top: 1vh;
    outline: none;
    text-align: center;
}

form input[type="checkbox"]{
    width: 2vh;
    /* display: flex; */
    /* flex-direction: column; */
    
}
form p{
    margin-top: 1vh;
    margin-left:1vw;
}
form input[type="submit"]{
    width: 25vw;
    border: 1px solid #000;
    border-radius: 3px;
    background-color:#02313a;
    color: #fff;
    margin-top: 2vh;
    display: block;

}

form input[type="checkbox"]:focus{
    margin-left: 0;
}
form input[type="submit"]:hover{
    transition: 0.25s ease;
    background-color: #02312b;
}
form input:focus{
    transition: 00.25s ease;
    margin-left: 1vw;
}
form h2{
    font-weight: 600;
    margin-left: 0vh;
}
form a{
    display: block;
    color:#000;
    font-weight: 500;
    margin-top: 2vh;
}

.filer{
    position: absolute;
    margin-left: 35vw;
    background: url("rename.jpg");
    background-size: cover;
    height: 100%;
}
.opacity{
    background-color: #000;
    opacity: 0.8;
    color: #fff;
    height: 100%;
    /* margin-top: 20vh; */
}

marquee{
    margin-top: 50vh;
    margin-left: 3vw;
    margin-right: 3vh;
}
    

    </style>
</head>
<body>
    <section id="login">

        
        
        <div class="user_input">
        <form action="process.php" method="POST" >
        <h2>Welcome Back !</h2>
        <p>Sign in to continue</p>
       
        <label for="">Email</label>
       <input type="email" name="email" placeholder="Enter email">
       
       <label for="">Password</label>
    <input type="password" name="Password" placeholder="Enter Password" >
    <a href="forgot_password.php" class="forgot">Forgot password?</a>
    
    <input type="submit" value="login" name="login">
    <a href="index.html" style="margin-top:5vh;"><i class='bx bx-arrow-back'></i></a>
    </div>
    
    </form>

    <div class="filer"> 
        <div class="opacity">
        <marquee direction="up" behaviour="scroll"  scrolldelay="250"> Ensuring healthy lives and promoting well-being at all ages is essential to sustainable development.
             Currently, the world is facing a global health crisis unlike any other — COVID-19 is spreading human suffering, destabilizing the global economy and upending the lives of billions of people around the globe. </marquee>
             </div>
    </div>
    </section>
</body>
</html>