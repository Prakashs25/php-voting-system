<?php
	session_start();
	
	if($_SESSION["check"]==0) {
		header("location:index.html");
	}
	
	include('CONN.php');
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Vote Here</title>
	<link rel="stylesheet" href="assets/AVStyle.css">
	
</head>

<body>
	<div class="alert">
		<h1 id='adhead'>ADMIN PANEL<a id='lgbtn' href='LOGOUT.php'> LOGOUT </a><a id='lgbtn' href='RESULTS.php'> RESULTS </a></h1>
	</div>
	
	</br>
	</br>
	
	<center>

	<div class="container2">
	
		<form action="ADDCAN.php" method="POST">
			
			<h2>ADD A CANDIDATE</h2></br></br>
		
			<input type="text" name="cid" value="" placeholder="Enter UID" id="cid" /></br></br>
			
			<input type="text" name="cname" value="" placeholder="Enter Name" id="cname" /></br></br>
			
			<input type="text" name="cgen" value="" placeholder="Gender : M / F" id="cgen" /></br></br>
			
			<button type="submit">
				<span class="state">ADD CANDIDATE</span>
			</button>
			
		</form>
		
	</br>
	</br>
	
	</div>

	<hr>
	<div class="container2">
	
		<form action="ADDUSER.php" method="POST">
			
			<h2>ADD A NEW USER</h2></br></br>
		
			<input type="text" name="nid" value="" placeholder="Enter username" id="nid" /></br></br>
			
			<input type="password" name="npass" value="" placeholder="Enter password" id="npass" /></br></br>
			
			<button type="submit">
				<span class="state">ADD USER</span>
			</button>
			
		</form>
		
	</br>
	</br>
	
	</div>
	
	<hr>
	<div class="container2">
	
		<form action="RESETDB.php" method="POST">
			
			<h2>RESET DATABASE FOR VOTERS AND CANDIDATES</h2></br></br>
		
			<button type="submit">
				<span class="state">CLICK HERE TO RESET DATABASE</span>
			</button>
			
		</form>
		
	</br>
	</br>
	
	</div>
	</center>
	

</body>

</html>
