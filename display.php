<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="admin.css">
	<title>Display</title>
	<style type="text/css">


		html{
			scroll-behavior: smooth;
		}

	
		article{
			position: absolute;
			margin-left: 25vw;
			background-color: #fff;
			margin-top: 10vh;
		}
		button{
			margin-top: 5vh;
			margin-bottom: 5vh;
			margin-left: 5vw;
			/* width: 10vw; */
			height: 5vh;
			background-color: #1F51FF;
			border-radius: 5px;
			color: #fff;

		}
		a{
			text-decoration: none;
		}
		table{
			box-shadow: 0 0 0 3px #f4f4f4;
			/* margin: 1vh; */
			width: 100%;
			/* margin-right:5vw; */
			/* margin-left: 5vw; */
			margin-top: 5vh;
			margin-bottom: 5vh;
			/* border-collapse: collapse;/ */
			/* background-color: #f4f4f4; */



		}

		table thead tr{
			font-size: 20px;
			/* width: 100%; */
			

			

		}
		table thead tr th{
			padding-right: 2vw;
			color: #333;
			border: 1px solid #f4f4f4;
			height: 5vh;
			/* border-collapse: collapse; */
			/* text-align: center; */
		}
		/* @media screen and (max-width:760px) {
			aside{
				display: none;
			}
			article{
				width: 100%;
				margin-left: 0;
				
				
			}
			
		} */
	</style>
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
	<div class="button">
		<a href="adddoc.php"><button>Add Doctor</button></a>
	</div>
	<table>
		<thead>
		<tr>
			<th>Doc id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Department</th>
			<th>Password</th>
			<th>Mobile</th>
			<th>Operation</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$sql="SELECT * FROM `adoctor`";
			$result=mysqli_query($conn,$sql);
			if ($result) {
				while ($row=mysqli_fetch_assoc($result)) {
					$id=$row['doctor_id'];
					$name=$row['d_name'];
					$email=$row['d_email'];
					$dept=$row['department'];
					$password=$row['d_password'];
					$mobile=$row['mobile'];
					
					echo '<tr>
				<th scope="row" style="position:relative; display:flex;flex-direction:column">'.$id.'</th>
				<td style="border-left: 2px solid #f4f4f4";>'.$name.'</td>
				<td style="border-left: 2px solid #f4f4f4";>'.$email.'</td>
				<td style="border-left: 2px solid #f4f4f4";>'.$dept.'</td>
				<td style="border-left: 2px solid #f4f4f4";>'.$password.'</td>
				<td style="border-left: 2px solid #f4f4f4";>'.$mobile.'</td>
				<td style="display: flex;"><button style="width: 30%; height:5vh; "><a style="color: #fff;" href="update.php? updateid='.$id.'">Update</a></button>
			<button style="width: 30%;height:5vh;position:relative;right:4.5vw;background:red;"><a style="color: #fff;" href="delete.php?deleteid='.$id.'">Delete</a></button>
		</td>
	</tr>';
				}

			}
			?>
		

		</tbody>
	</table>
	</article>

</body>
</html>