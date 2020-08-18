<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['emp_no'])){
		$emp_no = $_POST['emp_no'];
		mysqli_query($conn, "DELETE FROM `employee` WHERE `emp_no` = '$emp_no'") or die(mysqli_error());
		
		
		if(file_exists("../files/".$emp_no)){
			removeDir("../files/".$emp_no);
			mysqli_query($conn, "DELETE FROM `employee` WHERE `emp_no` = '$emp_no'") or die(mysqli_error());
		}
	}
	
	function removeDir($dir) {
		$items = scandir($dir);
		foreach ($items as $item) {
			if ($item === '.' || $item === '..') {
				continue;
			}
			$path = $dir.'/'.$item;
			if (is_dir($path)) {
				xrmdir($path);
			} else {
				unlink($path);
			}
		}
		rmdir($dir);
	}
?>