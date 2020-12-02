<?php
	session_start();
	include_once('koneksi.php');

	if(isset($_POST['add'])){
		$namalengkap = $_POST['Nama_lengkap'];
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		$sql = "INSERT INTO admin (namalengkap, username, password) VALUES ('$Nama_lengkap', '$Username', '$Password')";

		//use for MySQLi OOP
		if($connect->query($sql)){
			$_SESSION['success'] = 'admin added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: admin.php');
?>