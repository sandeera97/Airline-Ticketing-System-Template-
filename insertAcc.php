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
	$lNM=$_REQUEST["lname"];
	$mail=$_REQUEST["mail"];
	$psw=$_REQUEST["psw"];
	
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "projectfinal";
	
	$conn = new mysqli($serverName,$userName,$password,$dbName);
	$sql = "insert into employee (fname,sname,mail,password) values('$fNM','$lNM','$mail','$psw')";
	
	
	
	if (mysqli_query($conn, $sql)) 
	{
    	$sql1 = "insert into logs (Email,pswd) values('$mail','$psw')";
		if(mysqli_query($conn, $sql1))
		{
			echo "New record created successfully";
			header('Location:lg/logg.php');
		}
		
		
	}
	else 
	{
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	?>
</body>
</html>