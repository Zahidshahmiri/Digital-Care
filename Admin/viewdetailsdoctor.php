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
     <h3>Doctor Details</h3>
</div>
<table class="container table table-bordered table-condensed">

	<?php
	$con=mysqli_connect("localhost", "root", "", "dcare");
	$records=mysqli_query($con, "select * from doctor where id='".$_GET['id']."'");
	?>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Department</th>
		<th>Contact</th>
		<th>Education</th>
		<th>Experience</th>
		<th>Charges</th>
	</tr>
	<tbody>
		<?php 
        while($r=mysqli_fetch_array($records))
        {
        	echo "<tr>";
        	echo "<td>".$r['name']."</td>";
        	echo "<td>".$r['email']."</td>";
        	echo "<td>".$r['department']."</td>";
        	echo "<td>".$r['contact']."</td>";
        	echo "<td>".$r['education']."</td>";
        	echo "<td>".$r['experience']."</td>";
        	echo "<td>".$r['charges']."</td>";
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