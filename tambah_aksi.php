<?php
include 'koneksi.php';
$Nama_lengkap = $_POST['Nama_lengkap'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

mysqli_query($koneksi, "insert into admin values('','$Nama_lengkap','Username','$Password')");

header("location:admin.php")

?>