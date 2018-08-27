<?php
session_start();
unset($_SESSION['sessionAdminEmail']);
header('Location: login.php');
exit;
?>