<?php

include 'connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #dashboard{
    position: absolute;
   margin-left: 25vw;
   margin-top: 8vh;
   display: grid;
     grid-template-columns: repeat(3,1fr);
    grid-gap: 3vw;

}
.display{
    margin-bottom: 10vh;
    margin-left: 2vw;
    margin-right: 0;

}

    </style>
    <title>Admin Panel</title>
</head>

<body>
    <aside>
        
        <!-- <div class="menu-icon">
            <i class='bx bx-menu' ></i>
            <i class='bx bx-x' ></i>
        </div> -->
        <ul class="sidebar_menu">

             
            <li>
                <a href="dashboard.php">
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="">
                    <span>Doctor</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="display.php">All Doctors</a></li>
                    <li><a href="adddoc.php">Add Doctor</a></li>
                    <li><a href="password.html">Edit Doctor</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <span>Patients</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="department.html">All Patients</a></li>
                    <li><a href="department.html">Add Patient</a></li>
                    <li><a href="department.html">Edit Patient</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <span>Appointments</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="#">Apointments</a></li>
                    <li><a href="viewapp.html">Doctor's Schedule</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    
                    <span>Support</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="viewapp.html">Help Center</a></li>
                </ul>
            </li>
            <li>
            <!-- <li>
                    <a href="">
                        <span>Pharmacy</span>
                        <i class='bx bx-chevron-right' ></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="book.html">Book Appointment</a></li>
                        <li><a href="viewapp.html">Doctor's Schedule</a></li>
                    </ul>
                </li> -->
                <a href="logout.php?logout">
                    <i class='bx bx-log-out'></i>
                    <span>Log Out</span>
                </a>
            </li>

            


        </ul>

            </aside>

  

    <article id="dashboard">
    
    <!-- display number of doctors -->
    <div class="display">
    <h2> <box-icon type='solid' name='user' >Total doctors<i class='bx bxs-user'></i> </i></h2> 
    <?php
    
    echo mysqli_num_rows($result);
    
    ?>
    </div>
<div class="display">
    <h2>Total Patients</h2>
    <?php
    $sql="SELECT * FROM patients";
    $q=mysqli_query($conn,$sql);
    echo mysqli_num_rows($q);
    ?>
</div>

<div class="display">
    <h2>Appointments</h2>
    <?php
    $sql="SELECT * FROM appointments";
    $q=mysqli_query($conn,$sql);
    echo mysqli_num_rows($q);
    ?>
</div>

<div class="display bottom">
    <h2>Prescription</h2>
    <?php
    $sql="SELECT * FROM prescription";
    $q=mysqli_query($conn,$sql);
    echo mysqli_num_rows($q);
    ?>
</div>

<div class="display bottom">
    <h2>medicine</h2>
    <?php
    $sql="SELECT * FROM prescription";
    $q=mysqli_query($conn,$sql);
    echo mysqli_num_rows($q);
    ?>
</div>
<div class="display bottom">
    <h2>Total billing</h2>
    <?php
    $sql="SELECT * FROM prescription";
    $q=mysqli_query($conn,$sql);
    echo mysqli_num_rows($q);
    ?>
</div>
    </article>


</body>
</html>