<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	
<body>

	<nav id="header" class="navbar navbar-inverse " >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            <div class=" col-md-6"> 
      <a class="navbar-brand " style="color:white; font-size: 25px; font-family: cursive;" href="index.php">D.Care </a>
    </div>
</div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="Doctor/doctorlogin.php">Doctors</a></li>
        <!-- <li><a href="">Department</a></li> -->
  </ul>
  <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration/Login <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Patient/pregistration.php">Patient Registration</a></li>
            <li><a href="Patient/patientlogin.php">Patient login</a></li>
            <li><a href="Doctor/Doctorlogin.php">Doctor login</a></li>
            
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="contactus.php">Contact Us <i class="fas fa-address-book"></i></a></li>
        <li><a href="Patient/pregistration.php">Sign Up <i class="fas fa-user-plus"></i></a></li>
        </ul>
</div>
</div>
</nav>
   
</body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">

	</script>
</html>
<style type="text/css">
     nav{
    padding:15px;
      font-size:18px;
  }
	#header{
		position:fixed;
		top:0px;
		left:0px;
		right:0px;
    z-index: 1;
	}
  
</style>