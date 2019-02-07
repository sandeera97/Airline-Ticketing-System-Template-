<?php
    
  session_start();
  
	if(!isset($_SESSION['mail']) && !isset($_SESSION["Pg"])) 
    {
       header('Location:login.php');
    }  
 $sess= $_SESSION["Pg"];
 $user=$_SESSION['mail'];
?>
<!DOCTYPE html>
<html>
<title>NIBM ISO</title>
<link rel="icon" type="image/gif/png" href="images/icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/w3css.css">
<link rel="stylesheet" href="CSS/w3ThemeTeal.css">
<link rel="stylesheet" href="CSS/fontsRoboto.css">
<link rel="stylesheet" href="CSS/TCSS.css">
<script src="JS/1js.js"></script>
<script src="JS/2js.js"></script>
<script src="JS/aa.js"></script>
<link rel="stylesheet" href="CSS/w3ThemeTeal.css"><style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="<?php echo"$sess";?>"><img src="images/topic.jpg" style="width:100%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button w3-teal" href="<?php echo"$sess";?>">Home</a>
  <a class="w3-bar-item w3-button" href="createAccdMsgs.php">Create Messages</a>
  <div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)"><?php echo"$user";?><i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button" href="accountSettings.php">Settings</a>
      <a class="w3-bar-item w3-button" href="accountSecurity.php">Security</a>
      <a class="w3-bar-item w3-button" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">NIBM ISO</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">NIBM ISO</h1>
</header>

<div class="w3-container" style="padding:32px">
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'iso1'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM task where assignBy = "Acadamics"';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
	<h4>Assing Task by: <?php echo"$user";?> </h4>
	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Priority Level</th>
				<th>Description</th>
				<th>ISO Type</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Assign To</th>
				<th>Assign By</th>
				<th>Delete Task</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$stid=$row["taskid"];
			echo"$stid";
			echo '<tr>
					
					<td>'.$row['priority'].'</td>
					<td>'.$row['description'].'</td>
					<td>'.$row['isoType'].'</td>
					<td>'. date('F d, Y', strtotime($row['startDate'])) . '</td>
					<td>'. date('F d, Y', strtotime($row['endDate'])) . '</td>
					<td>'.$row['assignTo'].'</td>
					<td>'.$row['assignBy'].'</td>
					<td><form name="f1" action="deleteTack.php" method="POST" ><input name="tid" type="hidden" value='.$row['taskid'].'><input  type="submit" value="Delete"></form></td>
				</tr>';
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>
             
            </tr>
		</tfoot>
	</table>

</div>

<footer class="w3-container w3-theme" style="padding:32px">
  <p>NIBM ISO. All rights reserved 2018</p>
  <p>Design by Tech Pirates</p>
</footer>
     
</div>

<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>
</html> 
