<?php
	session_start();
	
	if(!ISSET($_SESSION['employee'])){
		header('location:index.php');
	}
?>