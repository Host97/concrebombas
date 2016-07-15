<?php
session_start();
$_SESSION['status'] = "";
echo $_SESSION['status'];
//die ("abc ".$_SESSION['status']);
header ('Location: ../index.php');
//session_destroy();
?>