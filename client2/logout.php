<?php
session_start();
session_unset($_SESSION['sessionStudentAccountNumber']);
session_unset($_SESSION['sessionStudentAccountPassword']);
echo "<script> alert('You are now logging out'); window.location.replace('index.php');</script>";
// header("location: index.php");
?>