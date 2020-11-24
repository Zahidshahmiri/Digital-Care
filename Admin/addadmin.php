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
    <h3 class="lead text-center">Add New Admin</h3>
  </div>
</div>
  <div class="container">
    <h3 class="text-center">Add new Administrator record</h3>
    <form>
    <table class="table table-bordered" >
      <tbody>
        <tr>
          <td width="34%">Admin Name</td>
          <td width="66%"><input type="text" name="adminname" id="adminname" value=""/></td>
        </tr>
        <tr>
          <td>Login ID</td>
          <td><input type="text" name="loginid" id="loginid" value="" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" id="password" value=""/></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="cnfirmpassword" id="cnfirmpassword" value=""/></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><select name="select" id="select">
          <option value="">Select</option>
          <option value='Active'>Active</option><option value='Inactive'>Inactive</option>          </select></td>
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
<style type="text/css">
	.jumbotron{
		margin-top:80px;
	}
	h3{
		margin-bottom:30px;
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
    #select{
    height:30px;
   }
</style>