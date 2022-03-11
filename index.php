<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Mario Brkić Portfolio</h1>
  <p>My name is Mario. I'm graphic designer, filmmaker, video editor and programer.</p>
  <a href="#" class="fa fa-instagram"></a>
  <a href="#" class="fa fa-vimeo"></a>
  <a href="#" class="fa fa-behance"></a>
  <a href="#" class="fa fa-github"></a>
  <a href="#" class="fa fa-linkedin"></a>
	<br>
	<h5>Hello,</h5> <?php echo $user_data['user_name']; ?>
</body>
</html>