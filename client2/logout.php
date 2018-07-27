<?php
session_start();
session_unset();
session_destroy();
echo "<script> alert('You are now logging out'); window.location.replace('index.php');</script>";
// header("location: index.php");
?>