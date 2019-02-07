<?php

session_start();
if(isset($_SESSION['mail']) && isset($_SESSION["pg"]))
{
	$pg=$_SESSION["pg"];
	header('Location: '.$spg);
}
?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: transparent;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: transparent;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: transparent;
    margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
	

body {
	background-position: center;
    background-repeat: no-repeat;
    background-size: 900px 800px;
}
</style>
<body background="">
	
 
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="adminsignin.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      
      <label for="fname"><b>First Name</font></b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>
      
      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>
      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="mail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <p>If you have Already Account <a href="adminlog.php" style="color:dodgerblue">Click</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

        <button type="submit" id="myBtnn" class="signupbtn">Sign Up</button>
        
      </div>
      
      <script>
										// Get the modal
										var modal = document.getElementById('myModall');

										// Get the button that opens the modal
										var btn = document.getElementById("myBtnn");

										// Get the <span> element that closes the modal
										var span = document.getElementsByClassName("closee")[0];

										// When the user clicks the button, open the modal 
										btn.onclick = function() 
										{
											
											var x = document.getElementById("mail").value;
											var atpos = x.indexOf("@");
    										var dotpos = x.lastIndexOf(".");
											
											if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
												alert("Not a valid e-mail address");
											}
											else
											{
												if ((document.getElementById("psw").value.length > 7)){
												if (document.getElementById("psw-repeat").value == document.getElementById("psw").value)
												{
													modal.style.display = "block";
												}
												else
												{
													alert("Passwords doesn't match.");
												}
												}
												else
													{
														alert("Password length should be greater than 7 characters.");
													}
    										}
											
    										
										}

										// When the user clicks on <span> (x), close the modal
										span.onclick = function() 
										{
    										modal.style.display = "none";
											
										}

										// When the user clicks anywhere outside of the modal, close it
										window.onclick = function(event) 
										{
    										if (event.target == modal) 
											{
        										modal.style.display = "none";
    										}
										}
									</script>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
