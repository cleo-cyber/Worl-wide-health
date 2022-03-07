<?php
try {
	$db = new mysqli("localhost","root","","hospitalsystem");
} catch (Exception $exc) {
	echo $exc->getTraceAsString();
}

if (isset($_POST['Name']) && isset($_POST['email']) && isset($_POST['Message'])) {
	$name=$_POST['Name'];
	$email=$_POST['email'];
	$message=$_POST['Message'];

	$is_insert=$db->query("INSERT INTO `contact`( `name`, `email`, `message`) VALUES ('','','')");
	if ($is_insert == TRUE) {
		echo "<h2>Thanks your request was submitted.</h2>";
		exit();
	}
}


  

?>