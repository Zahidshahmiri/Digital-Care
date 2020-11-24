<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<?php require_once('adminheader.php') ?>
<?php require_once('adminmenu.php') ?>
<section>
  <div class="jumbotron">
      <h3 class="lead text-center">Add New Doctor </h3>
  </div>
</div>
  <div class="container">
    <h3 class="text-center">Add new Doctor record</h3>
    <form method="post">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td width="34%">Doctor Name</td>
          <td width="66%"><input type="text" name="name" id="doctorname" value="" /></td>
        </tr>
        <tr>
          <td>Contact</td>
          <td><input type="text" name="contact" id="mobilenumber" value=""/></td>
        </tr>
        <tr>
          <td>Department</td>
          <td>
          	<select name="department" id="select3">
	            <option value="">Select</option>
	            <option value="Physician">Physician</option>
	            <option value="Children doctor">Children doctor</option>
	            <option value="General Medicne1">General Medicne1</option>
	            <option value="ENT Specialist">ENT Specialist</option>
	            <option value="Neurologist">Neurologist</option>
	            <option value="Surgery">Surgery</option>
	            <option value="Pediatrics">Pediatrics</option>
	            <option value="Pharmacy">Pharmacy</option>
	            <option value="Laboratory and Blood bank">Laboratory and Blood bank</option>
	            <option value="Physiotherapy">Physiotherapy</option>
        	</select></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td>Education</td>
          <td><input type="text" name="education"></td>
        </tr>
        <tr>
          <td>Experience</td>
          <td><input type="number" name="experience"></td>
        </tr>
        <tr>
          <td>Consultancy Charge</td>
          <td><input type="number" name="charges"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input class="btn btn-info" type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
  </div>
</section>
</body>
</html>
<?php
  
   if(isset($_POST['submit']))
   {
     // mysqli_connect(servername, username, password, databasename);
     $con= mysqli_connect("localhost", "root", "", "dcare");
     mysqli_query($con, "insert into doctor (name,contact,department,email,password,education,experience,charges) values('".$_POST['name']."', '".$_POST['contact']."' ,'".$_POST['department']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['education']."' , '".$_POST['experience']."', '".$_POST['charges']."''".$_POST['status']."')");

     echo "<script>alert('data added') </script>";
   }

?>
<style type="text/css">
	.jumbotron{
		margin-top:100px;
		
	}
	section{
		margin-left:150px;
	}
	input[type=text]{
    width:250px;
    height:35px;
    font-size: 16px;
   }
 
    input[type=password]{
    width:250px;
    height:35px;
    font-size: 16px;

   }
    #select ,#select3{
    height:30px;
   }
</style>