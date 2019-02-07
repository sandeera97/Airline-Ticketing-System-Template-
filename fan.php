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

	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Comments = $_POST['comments'];
	
	
	$sql = "INSERT INTO com (Name,Email,Comment) VALUES('$Name','$Email','$Comments')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Thank For Your Message';
	}

	header("refresh:1.5; url= logaf.php");

?>