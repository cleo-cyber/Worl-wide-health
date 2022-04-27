<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="./css/display.css">
	<title>Display</title>
	

</head>
<body>

<aside>
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
                    <li><a href="patient.php">All Patients</a></li>
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
        <?PHP
        
        $sql="SELECT * FROM adoctor";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        $id=$row['doctor_id'];
        
    echo'<a href="update.php?updateid='.$id.'"><button style="background-color: #02313a;">Update</button></a>';
	?>
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
            echo "<td>";echo'<a href="delete.php?deleteid='.$id.'"><button style="background-color: #02313a; margin-left:10vw">Delete</button></a>';echo "</td>";
            echo "</tr>";
        }
		
		?>
		
</table>

</article>
  

</body>
</html>