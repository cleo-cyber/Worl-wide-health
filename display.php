<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>Display</title>
	<style type="text/css">
		button{
			margin-top: 5vh;
			margin-bottom: 5vh;
			margin-left: 5vw;
			width: 10vw;
			height: 5vh;
			background-color: #1F51FF;
			border-radius: 5px;
			color: #fff;

		}
		a{
			text-decoration: none;
		}
		table{
			width: 90vw;
			margin-right:5vw;
			margin-left: 5vw;
			margin-top: 5vh;
			margin-bottom: 5vh;
			border-collapse: collapse;
			/* background-color: #f4f4f4; */


		}

		table thead tr{
			font-size: 20px;
			width: 100%;
			border: 1px solid #f4f4f4;

		}
		table thead tr th{
			padding-right: 5vw;
			color: #333;
			/*border: 1px solid #f4f4f4;*/
			height: 5vh;
			border-collapse: collapse;
			text-align: center;
		}

	</style>
</head>
<body>
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
				<th scope="row" style="position:relative;">'.$id.'</th>
				<td>'.$name.'</td>
				<td>'.$email.'</td>
				<td>'.$dept.'</td>
				<td>'.$password.'</td>
				<td>'.$mobile.'</td>
				<td style="display: flex;"><button style="width: 30%; height:5vh;"><a style="color: #fff;" href="update.php? updateid='.$id.'">Update</a></button>
			<button style="width: 30%;height:5vh;position:relative;right:4.5vw;background:red;"><a style="color: #fff;" href="delete.php?deleteid='.$id.'">Delete</a></button>
		</td>
	</tr>';
				}

			}
			?>
		

		</tbody>
	</table>
</body>
</html>