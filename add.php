<?php


	session_start();
	include_once('koneksi.php');


if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
    if(isset($_POST['Submit'])) {

		$namalengkap = $_POST['Nama_lengkap'];
		$username = $_POST['Username'];
		$password = md5($_POST['Password']) ;

		$sql = "INSERT INTO admin (Username, Nama_Lengkap, Password)
		VALUES ('$username', '$namalengkap', '$password')";

		if ($connect->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $connect->error;
		}


		$connect->close();

		header("Location: admin.php");


	}
?>