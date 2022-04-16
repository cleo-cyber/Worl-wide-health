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


		}

		table thead tr{
			font-size: 20px;
			width: 100%;
			border: 1px solid #f4f4f4;

		}
		table thead tr th{
			padding-right: 10vh;
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
		<a href="adddoc.html"><button>Add user</button></a>
	</div>
	<table>
		<thead>
		<tr>
			<th>Doc id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Department</th>
			<th>Password</th>
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
					$mobile=$row['mobile'];
					$password=$row['password'];
			// 		echo '<tr>
			// 	<th scope="row">'.$id.'</th>
			// 	<td>'.$name.'</td>
			// 	<td>'.$email'</td>
			// 	<td>'.$dept.'</td>
			// 	<td>'.$mobile.'</td>
			// 	<td>'.$password.'</td>
			// </tr>'
				}

			}
			?>
	

		</tbody>
	</table>
</body>
</html>