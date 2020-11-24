<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet">
</head>
<body>
	<div id="content" class="container">
		<div class="heading" >
			<h2>Doctor Management System</h2>
			<p class="lead"> Doctor Area</p>		
		</div>
		<div class="login">
			<form method="post">
				<div class="form-group">
					<label for="patient-id">Email:</label><input id="patient-id" class="form-control" type="email" name="email" placeholder="Enter your ID" required>
				</div>
				<div class="form-group">
					<label for="patient-password">Password:</label><input id="patient-password" class="form-control" type="password" name="password" placeholder="********" required>
				</div>
				<div>
					<button name="btn" class="btn btn-md btn-info">Login</button>
				</div>
				
				
			</form>
		</div>
	
	</div>
<?php
   if(isset($_POST['btn']))
   {
   	   $con= mysqli_connect("localhost", "root", "", "dcare");
   	   $rec=mysqli_query($con, "select * from doctor where email='".$_POST['email']."' and password ='".$_POST['password']."' and status='Active'");
       
       $r=mysqli_num_rows($rec);
       $t=mysqli_fetch_array($rec);
       if($r==1)
       {
         session_start();
         $_SESSION['doctor_name']=$t['name'];
         $_SESSION['validuser']=$t['id'];
       	 header("location:doctordashboard.php");
       }
       else {
     echo "<script>alert('Invalid Entry!') </script>";
       	
       }
   }

?>
</body>
</html>
<style type="text/css">
 body{
    	background-image: url(../images/plogin.jpg);
    	background-size: cover;
    	background-position: center;
    	background-repeat: no-repeat;
    	background-attachment: fixed;	
    }
	*{
		margin:0px;
		padding:0px;
	}
	#content
	{ 
    
		margin-top:110px;
	}
	.heading{
		width: 450px;
    	margin-left: auto;
    	margin-right: auto;
    	text-align: center;
   
	}
    .lead{
    	font-family: 'Libre Franklin', sans-serif;
    }
    h2{
    	font-family: 'Libre Franklin', sans-serif;
		font-weight: 700;
    }
    .login{
    	width:300px;
    	margin-left: auto;
    	margin-right:auto;
    }
    .btn{
    	margin-left:125px;

    }
    input[type=text]{
    	height:40px;
    }
    input[type=password]{
    	height:40px;
    }
    </style>