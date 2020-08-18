<?php
	session_start();
	unset($_SESSION['employee']);
	header("location: index.php");
?>