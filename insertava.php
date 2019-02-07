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

	$Depature = $_REQUEST['depa'];
	$Arrival = $_REQUEST['arr'];
	$Departs = $_REQUEST['don'];
	$Returns = $_REQUEST['ron'];
	
	

	$sql = "INSERT INTO db (Depature,Arrival,Departs,Returns) VALUES('$Depature','$Arrival','$Departs','$Returns')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}
	    $con = mysqli_connect('localhost','root','','projectfinal');
			$sql=mysqli_query($con,"select * from fly where Flyone='$Depature' and Flytwo='$Arrival'");
			echo"<select>";
			while($row=$sql->fetch_assoc())
			{
				$fly1=$row["Flyone"];
				$fly2=$row["Flytwo"];
				$price=$row["Price"];
				$fname=$row["Fname"];
				
			echo"<option>$fly1</option>";
			echo"<option>$fly2</option>";
			echo"<option>$price</option>";
			echo"<option>$fname</option>";
			}
	header("Location:avaflight.php?id=".$fly1.$fly2.$price.$fname);

?>