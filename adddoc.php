<?php
include 'connect.php';

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['Email'];
	$department=$_POST['Department'];
	$phone=$_POST['Mobile'];
	$pass=$_POST['Password'];
    $charge=$_POST['Charge'];
    $location=$_POST['location'];
    $experience=$_POST['experience'];
    $status=$_POST['Status'];
    $dob=$_POST['dob'];

	$sql="INSERT INTO `adoctor`(d_name, d_email, department, mobile,d_password,l_ocation,consultancy_charge,s_tatus,experience,dob)
	VALUES('$name','$email','$department','$phone','$pass','$location','$charge','$status','$experience','$dob')";

	$result=mysqli_query($conn,$sql);
	if (!$result) {
		die("connection failed".mysqli_connect_error());
	}
	else{
		header("location:display.php");
	}

  
	
}
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="admin.css">
   <style type="text/css">
    	
    	form{
    		margin-top: 10vh;
    		margin-right: 2vw;
    		/* margin-left: 2vw; */
    		margin-bottom: 10vh;
			position: absolute;
			margin-left:  46vw;
			
			/* box-shadow: 0 0 0 2px gray; */

    	}
		form input{
			width: 40vw;
			height: 5vh;
			/* box-shadow: 0 0 0 2px gray; */
			outline: none;
			text-align: center;
			border-top: 0;
			border-right: 0;
			border-left: 0;
		}
		form button{
			margin-top: 3vh;
			width: 10vw;
			height: 5vh;
		   background-color: #228997;
		   color: #fff;
		   border-radius: 5px;
		   margin-bottom: 5vh;
;
		}

		form input:focus{
			transition: 0.4s ease;
			/* transition-property: all; */
			box-shadow:0 2px 0 0 #b7daf7 ;
			margin-left: 1vw;
		}
		form button:hover{
			background-color: #228977;
		}
    	form label{
    		margin-top: 2vh;
			margin-top: 3vh;
			margin-bottom: 1vh;
			display: block;

    	}

.conatiner{
	margin-right: 5vw;
}

    </style>
    <title>Add doctor</title>
  </head>
  <body>
   <div class="container">
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
                    <li><a href="editdoc.php">Edit Doctor</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <span>Patients</span>
                    <i class='bx bx-chevron-right' ></i>
                </a>
                <ul class="submenu">
                    <li><a href="department.html">All Patients</a></li>
                    <!-- <li><a href="department.html">Add Patient</a></li> -->
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
                <a href="billing.php">
                    <i class='bx bxs-dashboard'></i>
                    <span>Billing</span>
                </a>
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

  

  

   	<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>">
 	 <div class="form-group">
		<label  class="form-label">Full Name</label>
		<input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off">
	</div>
    <div class="form-group">
		<label  class="form-label">Date of birth</label>
		<input type="date" class="form-control" placeholder="enter date of birth" name="dob" autocomplete="off">
	</div>
	<div class="form-group">
		<label  class="form-label">Email</label>
		<input type="email" class="form-control" placeholder="Enter Email" name="Email" autocomplete="off">
	</div>
	<div class="form-group">
		<label  class="form-label">Department</label>
		<input type="text" class="form-control" placeholder="Enter Department" name="Department" autocomplete="off">
	</div>
	<div class="form-group">
		<label  class="form-label">Mobile number</label>
		<input type="text" class="form-control" placeholder="Enter phone number" name="Mobile" autocomplete="off">
	</div>

	<div class="form-group">
		<label  class="form-label">Password</label>
		<input type="password" class="form-control" placeholder="Enter password" name="Password" autocomplete="off">
	</div>
    <div class="form-group">
		<label  class="form-label">location</label>
		<input type="text" class="form-control" placeholder="Enter location" name="location" autocomplete="off">
	</div>
    <div class="form-group">
		<label  class="form-label">Experience</label>
		<input type="number" class="form-control" placeholder="Years of experience" name="experience" autocomplete="off">
	</div>
    <div class="form-group">
		<label  class="form-label">Consultancy Charge</label>
		<input type="number" class="form-control" placeholder="Charges" name="Charge" autocomplete="off">
	</div>
    <div class="form-group">
		<label  class="form-label">Status</label>
		<input type="text" class="form-control" placeholder="Status" name="Status" autocomplete="off">
	</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>

  </body>
</html>