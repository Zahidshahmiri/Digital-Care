<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<?php 
  require_once('adminheader.php');
  require_once('adminmenu.php');
?>
<div class="jumbotron">
	<h2 >D.Care Admin Management System</h2><br>
     <h3>Patient Details</h3>
</div>
<table class="container table table-bordered table-condensed">

	<?php
	$con=mysqli_connect("localhost", "root", "", "dcare");
	$records=mysqli_query($con, "select * from patient where id='".$_GET['id']."'");
	?>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Gender</th>
		<th>Blood Group</th>
		<th>Age</th>
	</tr>
	<tbody>
		<?php 
        while($r=mysqli_fetch_array($records))
        {
        	echo "<tr>";
        	echo "<td>".$r['name']."</td>";
        	echo "<td>".$r['email']."</td>";
        	echo "<td>".$r['address']."</td>";
        	echo "<td>".$r['contact']."</td>";
        	echo "<td>".$r['gender']."</td>";
        	echo "<td>".$r['blood']."</td>";
        	echo "<td>".$r['age']."</td>";
        	echo "</tr>";

        }


		?>
	</tbody>
</table>

</body>
</html>
<style type="text/css">
	body{
  margin-left: 153px;
}
  h2{
     margin-top: 115px;
     text-align: center;
  }
  h3{
     text-align: center;
    
  }
</style>