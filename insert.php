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
	$Class = $_REQUEST['class'];
	

	$sql = "INSERT INTO db (Depature,Arrival,Departs,Returns,class) VALUES('$Depature','$Arrival','$Departs','$Returns','$Class')";

	if(!mysqli_query($con,$sql))
	{
		echo "<font color='red' size='7' ><center>'Not Avaliable !!!!!!!!!!!!!'</center></font>";
		header("refresh:1; url= logaf.php");
	}
	
	else
	{
		echo"<table align='center'>";
			echo"<tr height='50'>";
					echo"<td width='300'>";
		
		echo "<font color='red' size='6' ><center>'Sorry This Date Has Not Avaliable Flight !!!!!!!!!!!!!'</center></font>";
		header("refresh:5; url= logaf.php");
		
		echo"<br>";echo"<br>";echo"<br>";echo"<br>";
		
		echo "<font color='red' size='4' ><center>'Please Wait Page Will Automaticaly Reloaded'</center></font>";
		header("refresh:5; url= logaf.php");
		
					echo"</td>";
			echo"</tr>";
		echo"</table>";
		
	}
	    $con = mysqli_connect('localhost','root','','projectfinal');
			$sql=mysqli_query($con,"select * from fly where Flyone='$Depature' and Flytwo='$Arrival' and Ddate='$Departs' and Rdate='$Returns' and class='$Class'");
			echo"<select>";

	
			while($row=$sql->fetch_assoc())
			{
				$fname=$row["Fname"];
				$fly1=$row["Flyone"];
				$fly2=$row["Flytwo"];
				$price=$row["Price"];
				
				$dd=$row["Ddate"];
				$rd=$row["Rdate"];
				$Class=$row["class"];
			
								echo"<option>$fn</option>";
								echo"<option>$price</option>";
								echo"<option>$fly1</option>";
								echo"<option>$fly2</option>";
								echo"<option>$dd</option>";
								echo"<option>$rd</option>";
								echo"<option>$Class</option>";
				echo"<table border='1'>";
			echo"<tr height='50'>";
					echo"<td width='200'>";
								echo'Avaliable Flight :';
					echo"</td>";
					echo"<td width='200'>";
								header("Location:logaf.php?id=".$fname.$fly1.$fly2.$price.$dd.$rd.$Class);
					echo"</td>";
			echo"</tr>";
		echo"</table>";
					
			}
?>