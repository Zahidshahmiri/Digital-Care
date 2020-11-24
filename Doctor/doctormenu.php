<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

</head>
<body>
	<?php
 session_start();
  if(!(isset($_SESSION['validuser'])))
  {
  	header("location:doctorlogin.php");

  }

?>

     <div class="menu">
		<ul>
			<li style="color:white; font-family: cursive; font-size: 18px;"> Welcome  <br>
         <?php 
          
           echo $_SESSION['doctor_name'];
         ?>
		</li>
			<li><a href="doctorprofile.php"><i class="fas fa-user"></i> Profile</a>
				<ul >
					<li><a href="changepassword.php">Change Password</a></li>
					<li><a href="updatedetails.php">Update Details</a></li>
				</ul>
			</li>

			<li><a href=""><i class="fas fa-business-time"></i> Doctor Timings</a>
				<ul >
					<li><a href="">View Timings</a></li>
					<li><a href="">Add Timings</a></li>
				</ul>
			</li>
			<li><a href=""><i class="fas fa-calendar-check"></i> Appointment</a>
				<ul >
					<li><a href="">View Pending Appointment</a></li>
					<li><a href="">View Approved Appointment</a></li>
				</ul>
			</li>
			<li><a href=""><i class="fas fa-file-medical"></i> Patient</a>
				<ul >
					<li><a href="addpatient.php">Add Patient</a></li>
					<li><a href="viewpatient.php">View Patient Records</a></li>
				</ul>
			</li>
			<li style="border-bottom:1px solid silver;"><a href=""><i class="fas fa-procedures"></i> Treatment</a>
				<ul >
					<li><a href="">View Treatment</a></li>
					<li><a href="">View Treatment Records</a></li>
				</ul>
			</li>
		
		</ul>
	</div>
</body>
</html>
<style type="text/css">
	body{
		padding: :0px;
		margin:0px;
	} 
    
    .menu{
	 	margin-top: 125px;
    	position: fixed;
	 	top:2px;
	 	bottom: 0px;
	 	left:0px;
		background: linear-gradient(230deg, rgba(62,55,55,1) 46%, rgba(171,39,67,1) 100%);

	 
    }
	.menu ul{
		list-style: none;
		margin:0px;
		padding:0px;
	}
	.menu ul>li {
		padding: 15px;
		position:relative;
		background: linear-gradient(230deg, rgba(62,55,55,1) 46%, rgba(171,39,67,1) 100%);
		width:150px;
		border-top:1px solid silver;
		cursor: pointer;
	}
	.menu ul ul {
		transition: all 0.3s;
		opacity: 0;
		position:absolute;
		visibility: hidden;
		left:95%;
		top:-2%;
	} 
	.menu ul li:hover > ul{
		opacity: 1;
		visibility: visible;

	}
	.menu ul li a{
		color:#fff;
		text-decoration: none;
	}
	.menu ul li a:hover{
		color:red;
	}

</style>