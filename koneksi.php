<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'kulitjamur_cf';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');

function admin()
{
	$data = mysqli_query($this->koneksi, "select * from admin");
	while($row = mysqli_fetch_array($data)){
		$hasil[] = $row;
	}
	return $hasil;
}
function tambahadmin($Nama_lengkap,$Username,$Password)
{
	mysqli_query($this->koneksi, "insert into admin values ('','$Nama_lengkap','Username','Password')");
}
?>