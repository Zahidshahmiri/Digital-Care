<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
	<?php
    require_once('doctorheader.php');
    require_once('doctormenu.php');
    $con=mysqli_connect("localhost", "root", "", "dcare");
    $records=mysqli_query($con,"select *   from doctor where id ='".$_SESSION['validuser']."'");
    

    $r=mysqli_fetch_array($records);
	?>
	<div class=" jumbotron">
		<h2 class="text-center">Update Details</h2>
	</div>
	<form  method="post">
    <table class="table table-bordered" >
      <tbody>
        <tr>
          <td width="34%">Name</td>
          <td width="66%"><input type="text" name="name" value="<?php echo $r['name'] ?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email"  name="email" value="<?php echo $r['email']?>"></td>
        </tr>
         <tr>
          <td>Department</td>
          <td><input type="text" name="department" value="<?php echo $r['department'] ?>"></td>
        </tr>
         <tr>
          <td>Contact</td>
          <td><input type="text" name="contact"></td>
        </tr>
        <tr>
          <td>Experience</td>
          <td><input type="number" name="Experience"></td>
        </tr>
        <tr>
          <td height="36" colspan="2" align="center"><input class="btn btn-success" type="submit" name="btn" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>

<?php

  if(isset($_POST['btn']))
  {
      mysqli_query($con, "update doctor set name='".$_POST['name']."', email='".$_POST['email']."', pass='".$_POST['pass']."' where id= '".$_GET['id']."'");
      header('refresh:2');
  }


?>
</body>
</html>
<style type="text/css">
body{
	margin-left:150px;
}
 	.jumbotron{
		margin-top:50px;

	}

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