<?php
session_start();
session_unset($_SESSION['sessionAdminEmail']);
header('Location: login.php');
exit;
?>