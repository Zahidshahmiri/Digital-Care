<?php
$con=mysqli_connect("localhost", "root", "", "dcare");

    $records=mysqli_query($con,"delete  from doctor where id ='".$_GET['id']."'");
    header("location:viewdoctor.php");

?>