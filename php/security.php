<?php
session_start();
//die ("xyz ".$_SESSION['status']);
if ($_SESSION['status'] == 0 or $_SESSION['status']=='')
{	
	echo $_SESSION['status'];
	header("Location: ../index.php");
}
?>