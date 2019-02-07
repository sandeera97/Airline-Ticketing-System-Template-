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
	
	

	$sql = "INSERT INTO one (Depature,Arrival,Departs,Returns) VALUES('$Depature','$Arrival','$Departs')";

	if(!mysqli_query($con,$sql))
	{
		echo "<font color='red' size='7' ><center>'Not Avaliable !!!!!!!!!!!!!'</center></font>";
		header("refresh:1; url= home.php");
	}
	
	else
	{
		echo"<table align='center'>";
			echo"<tr height='50'>";
					echo"<td width='300'>";
		
		echo "<font color='red' size='6' ><center>'Sorry This Date Has Not Avaliable Flight !!!!!!!!!!!!!'</center></font>";
		header("refresh:5; url= home.php");
		
		echo"<br>";echo"<br>";echo"<br>";echo"<br>";
		
		echo "<font color='red' size='4' ><center>'Please Wait Page Will Automaticaly Reloaded'</center></font>";
		header("refresh:5; url= home.php");
		
					echo"</td>";
			echo"</tr>";
		echo"</table>";
		
	}
	    $con = mysqli_connect('localhost','root','','projectfinal');
			$sql=mysqli_query($con,"select * from onewayy where Flyone='$Depature' and Flytwo='$Arrival' and Ddate='$Departs'");
			echo"<select>";

	
			while($row=$sql->fetch_assoc())
			{
				$fname=$row["Fname"];
				$fly1=$row["Flyone"];
				$fly2=$row["Flytwo"];
				$price=$row["Price"];
				
				$dd=$row["Ddate"];
				
			
								echo"<option>$fn</option>";
								echo"<option>$price</option>";
								echo"<option>$fly1</option>";
								echo"<option>$fly2</option>";
								echo"<option>$dd</option>";
								
				echo"<table border='1'>";
			echo"<tr height='50'>";
					echo"<td width='200'>";
								echo'Avaliable Flight :';
					echo"</td>";
					echo"<td width='200'>";
								header("Location:home.php?id=".$fname.$fly1.$fly2.$price.$dd);
					echo"</td>";
			echo"</tr>";
		echo"</table>";
					
			}
?>