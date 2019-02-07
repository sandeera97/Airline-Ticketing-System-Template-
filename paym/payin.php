<?php

	$con = mysqli_connect('localhost','root','');

	if(!$con)
	{
		echo 'not connect to server';
	}
	if(!mysqli_select_db($con,'projectfinal'))
	{
		echo 'database not selected';
	}

	$Fname = $_POST['fname'];
	$Lname = $_POST['lname'];
	$Nic = $_POST['nic'];
	$Email = $_POST['email'];
	$Card = $_POST['card'];
	$Edate = $_POST['edate'];
	$Cv = $_POST['cv'];
	$Cname = $_POST['cname'];
	
	$sql = "INSERT INTO payin (Fname,Lname,Nic,Email,Card,Edate,Cv,Cname) VALUES('$Fname','$Lname','$Nic','$Email','$Card','$Edate','$Cv','$Cname')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}

	header("refresh:1; url= payform.php");

?>