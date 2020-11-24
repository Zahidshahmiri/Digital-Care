<?php
$con=mysqli_connect("localhost", "root", "", "dcare");

    $records=mysqli_query($con,"delete  from patient where id ='".$_GET['id']."'");
    header("location:viewpatient.php");

?>