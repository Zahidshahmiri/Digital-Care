<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
	<?php require_once('adminheader.php') ?>
	<?php require_once('adminmenu.php') ?>

  <?php 
     $con= mysqli_connect("localhost", "root", "", "dcare");
       $res=mysqli_query($con, "select * from admin where email='".$_SESSION['validuser']."' ");
       $r=mysqli_fetch_array($res)
  ?>
	<section>
	<div class="jumbotron">
      <h3 class="lead text-center" >View and Update Administrator Profile</h3>
    </div>
    <div class="container">
    <form>
    <table class="table table-bordered table-condensed">
       <?php 
          $con=mysqli_connect("localhost","root", "", "dcare");
          $records=mysqli_query($con, "select * from admin order by id desc");


       ?>
      
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Status</th>
        </tr>
        <tbody>
           <?php 
             while($r=mysqli_fetch_array($records))
             {
                echo "<tr>";
                echo "<td>". $r['name']. "</td>";
                echo "<td>". $r['email']. "</td>";
                echo "<td>". $r['Status']. "</td>";
                echo "</tr>";
             }

          ?>
  
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