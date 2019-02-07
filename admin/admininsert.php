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

	$Flyone = $_POST['flyy'];
	$Flytwo = $_POST['flytwo'];
	$Price = $_POST['price'];
	$Fname = $_POST['fname'];
	$Ddate = $_POST['ddate'];
	$Rdate = $_POST['rdate'];
	$Class = $_POST['class'];
	
	$sql = "INSERT INTO fly (Flyone,Flytwo,Price,Fname,Ddate,Rdate,class) VALUES('$Flyone','$Flytwo','$Price','$Fname','$Ddate','$Rdate','$Class')";

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
