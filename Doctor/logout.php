<?php

session_start();
unset($_SESSION['validuser']);
header("location:doctorlogin.php");
?>