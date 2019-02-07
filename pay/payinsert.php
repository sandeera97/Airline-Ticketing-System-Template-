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
	$Street = $_POST['street'];
	$City = $_POST['city'];
	$State = $_POST['state'];
	$Zip = $_POST['zip'];
	$Country = $_POST['country'];
	$Email = $_POST['email'];
	$Cname = $_POST['cardholdername'];
	$Cnumber = $_POST['cardnumbe'];
	$Select2 = $_POST['select2'];
	$Cv = $_POST['cv'];
	$Nic = $_POST['nic'];
	
	$sql = "INSERT INTO payment (Fname,Lname,Street,City,State,Zip,Country,Email,Cname,Cnumber,Select2,Cv,Nic) VALUES('$Fname','$Lname','$Street','$City','$State','$Zip','$Country','$Email','$Cname','$Cnumber','$Select2','$Cv','$Nic')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}

	header("refresh:1; url= index.php");

?>