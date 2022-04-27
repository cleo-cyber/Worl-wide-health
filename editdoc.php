<?php
include 'connect.php'

?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
   <link rel="stylesheet" href="admin.css">
   <link rel="stylesheet" href="./css/display.css">
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
    <title>edit doctor</title>
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

  

  
            <article>
	<div class="add">
       
    <a href="adddoc.php"><button style="background-color: #02315a;">Add doctor</button></a>
        
	</div>
<table>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Email</th>
		<th>Department</th>
		<th>Mobile</th>
        <th>location</th>
        <th>Charges</th>
        <th>Status</th>
        <th>experience</th>
        <th>DOB</th>
        <th>Password</th>
		<th >Operation</th>
	</tr>
	<tr>
		<?php
		$sql="SELECT * FROM `adoctor`";

		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			$id=$row['doctor_id'];
			$name=$row['d_name'];
			$email=$row['d_email'];
			$department=$row['department'];
			$mobile=$row['mobile'];
            $charge=$row['consultancy_charge'];
            $location=$row['l_ocation'];
            $experience=$row['experience'];
            $status=$row['s_tatus'];
            $dob=$row['dob'];
			$pass=$row['d_password'];


            echo "<tr>";
            echo "<td>";  echo $id; echo "</td>";
            echo "<td>";  echo $name; echo "</td>";
            echo "<td>"; echo $email; echo "</td>";
            echo "<td>"; echo $department;echo  "</td>";
            echo "<td>"; echo $mobile; echo "</td>";
            echo "<td>";echo $location;echo "</td>";
            echo "<td>";echo $charge;echo "</td>";
            echo "<td>";echo $status;echo "</td>";
            echo "<td>";echo $experience;echo "</td>";
            echo "<td>";echo $dob;echo "</td>";
            echo "<td>";echo $pass;echo "</td>";
            echo "<td>";echo'<a href="update.php?updateid='.$id.'"><button style="background-color: #02313a; margin-left:10vw">Update</button></a>';echo "</td>";
            echo "</tr>";
        }
		
		?>
		
</table>

</article>
</body>
</html>