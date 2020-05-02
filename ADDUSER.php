<?php
	include('CONN.php');
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nid = test_input($_POST["nid"]);
		$npass = test_input($_POST["npass"]);
		$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
		
		if(!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		$sql="INSERT INTO LOGIN(UID,PWD,PROFILE) VALUES('".$nid."','".$npass."',0)";
		if(mysqli_query($conn,$sql)) {
			echo "<br/><script>alert('ADDED SUCCESSFULLY');</script>";
		}
		else {
			echo 'FAILED TO ADD USER'.mysqli_error($conn);
		}
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	mysqli_close($conn);
?>
