<?php
	session_start();
	require 'admin/conn.php';
	
	if(ISSET($_POST['login'])){
		$stud_no = $_POST['emp_no'];
		$password = md5($_POST['password']);
		
		$query = mysqli_query($conn, "SELECT * FROM `employee` WHERE `emp_no` = '$stud_no' && `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = $query->num_rows;
		
		if($row > 0){
			$_SESSION['employee'] = $fetch['emp_no'];
			header("location:employee_profile.php");
		}else{
			echo "<center><label class='text-danger'>Invalid username or password</label></center>";
		}
	}
?>