<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Spectral:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	

</head>
<body>

	<?php
      session_start();
      if(!isset($_SESSION['validuser']))
      {
      	header("location:adminlogin.php");
      }
	?>
	<div class="main">
     	 <a class="navbar-brand " style="color:white; font-size: 25px; font-family: cursive;" href="index.php">D.Care </a>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <div class="both" style="width:60%; text-align: center;"><a href="" style="font-size: 45px;  text-decoration: none; color: white; font-family: cursive;margin-left:100px;">Admin Dashboard</a></div>
		 <div class="both" style="width:10%;   margin-left: 250px; color: white;"><a href="logout.php" style="font-size: 15px; text-decoration: none; color:white; ">Logout</a></div>
	</div>
</body>
</html>

<style type="text/css">
	*{
		margin:0px;
		padding: 0px;
	 }

	.main{
		background: linear-gradient(to right, #8e0e00, #1f1c18); 
		width: 100%;
		padding: 30px;
		position: fixed;
		top:0px;
		left:0px;
		right:0px;

	 }
	 .both{
	 	display: inline-block;
	 	font-family: 'Spectral', serif;

	 }

/*	 .both>a{
	 	text-decoration: none;
	 	color:snow;
	 }*/
	
</style>