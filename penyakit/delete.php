<?php
// include database connection file
include_once("../koneksi.php");

        $id = $_GET['id'];

            $result = mysqli_query($connect, "SELECT * FROM data_penyakit WHERE id='$id'");
            while($penyakit = mysqli_fetch_array($result))
            { 
                unlink('gambar/'.$penyakit['gambar']);
            }

// unlink($Your_file_path);

$result = mysqli_query($connect, "DELETE FROM data_penyakit WHERE id=$id");



header("Location:index.php");


?>