<?php
session_start();
session_destroy();
header('Location: clientLogin.php');
exit;
?>