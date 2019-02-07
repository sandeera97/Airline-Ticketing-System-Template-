<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	session_destroy();
	
	header('location:login.php');
	?>
</body>
</html>