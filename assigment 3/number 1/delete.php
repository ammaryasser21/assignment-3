<?php 
session_start();
unset($_SESSION['products'][$_GET['index']]);
header('location: submit.php');
?>

