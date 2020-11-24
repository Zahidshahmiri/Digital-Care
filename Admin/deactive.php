<?php
$con=mysqli_connect("localhost", "root", "", "dcare");

    $records=mysqli_query($con,"update doctor set status='active' where id ='".$_GET['id']."'");
    header("location:viewdoctor.php");

?>