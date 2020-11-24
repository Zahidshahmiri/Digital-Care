<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet"> 

</head>
<body>


	<section>
	<div id="admin" class="container">
		<div class="heading" >
			<h2>D.care Management System</h2>
			<p class="lead"> Admin Area</p>		
		</div>
		<div class="login">
			<form method="post">
				<div class="form-group">
					<label for="admin-mail">Email:</label><input id="admin-mail" class="form-control" type="Email" name="email" placeholder="Enter your E-mail" required>
				</div>
				<div class="form-group">
					<label for="admin-password">Password:</label><input id="admin-password" class="form-control" type="password" name="pass" placeholder="********" required>
				</div>
				
				<div>
					<button class="btn btn-md btn-info" type="submit" name="btn">Login</button>
				</div>
				
				
			</form>
		</div>
	


<?php
   if(isset($_POST['btn']))
   {
   	   $con= mysqli_connect("localhost", "root", "", "dcare");
   	   $rec=mysqli_query($con, "select * from admin where email='".$_POST['email']."' and pass ='".$_POST['pass']."'");
       
       $r=mysqli_num_rows($rec);
       // $t=mysqli_fetch_array($records);
       if($r==1)
       {
         session_start();
         $_SESSION['admin_name']=$r['name'];
         $_SESSION['validuser']=$_POST['email'];
         header("location:admindashboard.php");
       }
       else {
     echo "<script>alert('Invalid Entry!') </script>";
       	
       }
   }

?>

	</div>
</section>
</body>
</html>
<style type="text/css">
    body{
    	background-image: url(../images/adminlogin.jpg);
    	background-size: cover;
    	background-position: center;
    	background-repeat: no-repeat;
    	background-attachment: fixed;	
    }
	*{
		margin:0px;
		padding:0px;
	}
	#admin
	{ 
    
		margin-top:100px;
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
    input[type=email]{
    	height:40px;
    }
    input[type=password]{
    	height:40px;
    }
    </style>