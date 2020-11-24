<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Spectral:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

</head>
<body>
<div class="menu">
		<ul>
			<li><a href=""><i class="fas fa-user"></i> Profile</a>
				<ul >
					<li><a href="adminprofile.php">Admin Profile</a></li>
					<li><a href="changepassword.php">Change Password</a></li>
				</ul>
			</li>
			<li><a href=""><i class="fas fa-user-md"></i> Doctor</a>
				<ul >
					<li><a href="adddoctor.php">Add Doctor</a></li>
					<li><a href="viewdoctor.php">View Doctor</a></li>
					<li><a href="doctortimings.php">Add Doctor Timings</a></li>
				</ul>
			</li>
		
			<li><a href=""><i class="fas fa-file-medical"></i> Patient</a>
				<ul >
					<li><a href="addpatient.php">Add Patient</a></li>
					<li><a href="viewpatient.php">View Patient Records</a></li>
				</ul>
			</li>
			<li><a href=""><i class="fas fa-procedures"></i> Treatment</a></li>
			<li style="border-bottom:1px solid silver;" ><a href=""><i class="fas fa-user-circle"></i> Account</a></li>

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
		background: linear-gradient(to left, #8e0e00, #1f1c18); 

	 
    }
	.menu ul{
		list-style: none;
		margin:0px;
		padding:0px;
	}
	.menu ul>li {
		padding: 15px;
		position:relative;
		background: linear-gradient(to left, #8e0e00, #1f1c18); 
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