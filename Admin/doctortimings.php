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
     <h3 class="lead text-center">Add new Doctor Timings record</h3>
  </div>
   <form >
    <table class="table table-bordered" >
      <tbody>
              
        <tr>
          <td width="34%">Doctor</td>
          
          <td width="66%"><select name="select2" id="select2">
           <option value="">Select</option>        
          </select></td>
        </tr>
                <tr>
          <td>From</td>
          <td><input type="time" name="ftime"  value=""></td>
        </tr>
        <tr>
          <td>To</td>
          <td><input type="time" name="ttime"  value="" ></td>
        </tr>
        <tr>
          <td>Status</td>
          <td>
          	<select name="select" id="select">
	          <option value="">Select</option>
	          <option value='Active'>Active</option>
	          <option value='Inactive'>Inactive</option>         
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input class="btn btn-info" type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
  </section>
</body>
</html>
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
    #select ,#select2{
    height:30px;
   }
</style>