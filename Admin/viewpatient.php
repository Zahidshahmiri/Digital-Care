<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


</head>
<body>
<?php require_once('adminheader.php') ?>
<?php require_once('adminmenu.php') ?>
<section>
  <div class="jumbotron">
    <h3 class="lead text-center"> View All Patients</h3>
  </div>
</div>
  <div class="container">
    <h3 class="text-center">Patients</h3>
    <form>
    <table class="table table-bordered table-condensed table-hover" style="cursor: pointer;" >
       <?php 
          $con=mysqli_connect("localhost","root", "", "dcare");
          $records=mysqli_query($con, "select * from patient order by id desc");


       ?>
       <tr>
        <th> Name</th>
        <th> email</th>
        <th> contact</th>
        <th> View </th>
        <th> Action </th>

       </tr>
      <tbody>
        <?php 
             while($r=mysqli_fetch_array($records))
             {
                echo "<tr>";
                echo "<td>". $r['name']. "</td>";
                echo "<td>". $r['email']. "</td>";
                echo "<td>". $r['contact']. "</td>";
                echo "<td  style='width:80px; text-align:center;'>"."<a title='View' href='viewdetailspatient.php?id=$r[0]' class='btn btn-info'>". "<i class='far fa-eye'></i>"."</td>";
                echo "<td style='width:40px;'>"."<a title='Delete' href='deletepatient.php?id=$r[0]' class='btn btn-danger'>". "<i style='font-size:10px;' class='fas fa-trash'></i>"."</td>";
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