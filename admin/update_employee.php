<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$stud_no = $_POST['stud_no'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$yrsec = $_POST['year']."".$_POST['section'];
		$password = md5($_POST['password']);
		
		mysqli_query($conn, "UPDATE `employee` SET `firstname` = '$firstname', `lastname` = '$lastname', `gender` = '$gender', `yr&sec` = '$yrsec', `password` = '$password' WHERE `emp_no` = '$emp_no'") or die(mysqli_error());
		
		echo "<script>alert('Successfully updated!')</script>";
		echo "<script>window.location = 'employee.php'</script>";
	}
?>