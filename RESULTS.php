<?php
	include('CONN.php');
	include('SESSION.php');
	if($_SESSION["check"]==0) {
		header("location:index.html");
	}
	
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Vote Here</title>
	<link rel="stylesheet" href="assets/AVStyle.css">
	
	<style>
		table {
			background: white;
			height: auto;
			width: 800px;
			text-align: center;
		}
		th {
			padding: 10px;
		}
		td {
			padding: 10px;
		}

		.center {
			margin-top: 50px;
		}
	</style>
	
</head>

<body>
	<div class="alert">
	<p><?php echo $_SESSION['uid']; ?> : --- : RESULTS<a id='lgbtn' href='LOGOUT.php'> LOGOUT </a></p>
	
	</div>

	<center class="center">
		<div>	
	
	  
		<ul>
		  
			<?php
		  		$sql2="SELECT * FROM CANDIDATE ORDER BY VOTE_COUNT DESC";
		  		if($res2=mysqli_query($conn,$sql2)){
		  		
								    echo "<table border='10'>";
								    echo "<tr>";
								    echo "<th>UID</th>";
								    echo "<th>NAME</th>";
								    echo "<th>GENDER</th>";
								    echo "<th>VOTE COUNT</th>";
								    echo "</tr>";
						while($row2=mysqli_fetch_array($res2)){
									echo "<tr>";
									echo "<td>".$row2['UID']."</th>";
									echo "<td>".$row2['CNAME']."</th>";
									echo "<td>".$row2['GENDER']."</th>";
									echo "<td>".$row2['VOTE_COUNT']."</th>";
									echo" </tr>";

						}
						
								    echo "</table>";
				}
			?>
		</ul>
	
	
	</div>
	</center>
	
</body>

</html>
