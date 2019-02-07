<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include("connection.php");
    session_start();

   // if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
   //{
	   $Emai=$_POST["mail"];
	   $pswd=$_POST["psw"];
	   
	   $sql="Select * from logs where `Email`='$Emai' and pswd='$pswd'";
	
        $rs=mysqli_query($conn,$sql);
		
	    if($rs -> num_rows > 0) 
        {
	        while($row =$rs->fetch_assoc())
            {
		      $pageid=$row["pageid"];
               $_SESSION["mail"] = $_POST["mail"];
		      $_SESSION["Pg"] =$pageid;
			  
              header('Location:logaf.php?');
			  exit();	
		    }
		}
		else 
	    {
		   $Message = urlencode("Wrong email or password.Please try again... ");
           header('Location:lg/logg.php?Message='.$Message);
	    
	    }
	   
   //}			 
  // else
  // {	
    
   //$Emai=mysql_real_escape_string($_POST["mail"]);
  // $pswd=mysql_real_escape_string($_POST["pswd"]);
     
          //$Message = urlencode("Wrong email.Please try again... ");
           //header('Location:login.php?Message='.$Message);

   //}
  mysqli_close($conn);
?>

</body>
</html>