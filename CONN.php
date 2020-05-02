<?php	
	$db_host='localhost';
	$db_user='root';
	$db_passwd='';
	$db_name='votedb';
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	
	if(!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}
	
?>
