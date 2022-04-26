<?php
session_start();
if(isset($_SESSION['email'])){
    echo "<script>alert('Welcome');</script>";
}
else{
    header("location:adminLogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <span >Log Out</span>
                </a>
            </li>

            


        </ul>

            </aside>

  

  

</body>
</html>