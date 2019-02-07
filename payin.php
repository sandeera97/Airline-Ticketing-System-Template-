<?php
	$Fname = $_REQUEST['fname'];
	$Lname = $_REQUEST['lname'];
	$Nic = $_REQUEST['nic'];
	$Email = $_REQUEST['email'];
	$Card = $_REQUEST['card'];
	$Edate = $_REQUEST['edate'];
	$Cv = $_REQUEST['cv'];
	$Cname = $_REQUEST['cname'];
	

	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "projectfinal";
	
	$conn = new mysqli($serverName,$userName,$password,$dbName);
	$sql = "insert into payin (Fname,Lname,Nic,Email,Card,Edate,Cv,Cname) values('$Fname','$Lname','$Nic','$Email','$Card','$Edate','$Cv','$Cname')";
	
	
	
	if (mysqli_query($conn, $sql)) 
	{
    	//$sql1 = "insert into logs (username,password,pageid) values('$unm','$psw','$acc')";
		//if(mysqli_query($conn, $sql1))
		//{
			echo "New record created successfully";
			header('Location:payform.php');
		//}
		
		
	}
	else 
	{
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>