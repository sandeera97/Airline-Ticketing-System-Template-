<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include("connection.php");
	$fNM=$_REQUEST["fname"];
	$sNM=$_REQUEST["lname"];
	$ttl=$_REQUEST["smail"];
	$dsg=$_REQUEST["psw"];
	
	
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "projectfinal";
	
	$conn = new mysqli($serverName,$userName,$password,$dbName);
	$sql = "insert into sign (Fname,Lname,Email,Password) values('$fNM','$sNM','$ttl','$dsg')";
	
	
	
	if (mysqli_query($conn, $sql)) 
	{
    	$sql1 = "Insert into logs (username,password,pageid) values('$sNM','$ttl','logaf.php')";
		if(mysqli_query($conn, $sql1))
		{
			echo "New record created successfully";
			header('Location:logaf.php');
		}
		
		
	}
	else 
	{
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	?>
</body>
</html>