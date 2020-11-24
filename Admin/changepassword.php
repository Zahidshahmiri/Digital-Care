<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
</head>
<body>
	<?php 
    require_once('adminheader.php');
    require_once('adminmenu.php');

    $con=mysqli_connect("localhost", "root", "", "dcare");
    $r=mysqli_query($con, "select * from admin where email='".$_GET['email']."'");
  

    ?>
    <section>
  <div class="jumbotron">
  	<h2 class=" text-center">Change Password</h2>
  </div>
      <form id="form" method="post" onsubmit="return confirm()">
    <table class="table table-bordered" >
      <tbody>
        <tr>
          <td width="34%">Email ID</td>
          <td width="66%"><input type="Email" name="email"></td>
        </tr>
        <tr>
          <td>New Password</td>
          <td><input type="password" id="new" name="pass"></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" id="cnew" required="" name="cpassword"><span id="message"></span></td>
        </tr>
        <tr>
          <td height="36" colspan="2" align="center"><input class="btn btn-success" type="submit" name="btn" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
</section>
</body>
<script type="text/javascript">
  function confirm() {
    var a= document.getElementById("new").value;
    var b= document.getElementById("cnew").value;

   if(a!=b){
    alert('Password does not match');
     return false;
   } else{
    alert('Password changed successfully');

   }
 }
  
  
</script>
</html>
<?php

  if(isset($_POST['btn']))
  {

      mysqli_query($con, "update admin set pass='".$_POST['pass']."' where email= '".$_POST['email']."'");

  }


?>
<style type="text/css">
	.jumbotron{
		margin-top:90px;
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
</style>