<?php
include('connection.php');

if(isset($_POST["tid"]))
{
   $id=$_POST["tid"];
   $select=mysqli_query($conn," DELETE FROM fly WHERE id ='$id'")or die(mysqli_error($conn));  
   if($select)
   {
     header('location:deletesche.php');
   }
   else
   {
	   echo"Not Working";
   }

}
?>