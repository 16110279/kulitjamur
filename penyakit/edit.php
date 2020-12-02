<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Diagnosa Jenis Penyakit Kulit pada Manusia</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/../assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<?php
    include_once("../koneksi.php");
    if(isset($_POST['Submit'])) {

		$id = $_POST['id'];
		$Nama_penyakit = $_POST['Nama_penyakit'];
		$Detail_penyakit = $_POST['Detail_penyakit'];
		$Saran_penyakit = $_POST['Saran_penyakit'];
        print("<pre>".print_r($_POST,true)."</pre>");

        if($_FILES['file']['name'] == '')
        {
            $connect = mysqli_query($connect,"update data_penyakit set Nama_penyakit='$Nama_penyakit', detail_penyakit='$Detail_penyakit', saran_penyakit='$Saran_penyakit' where id='$id'");

            header("Location:index.php");
        }
        else
        {
        	$ekstensi_diperbolehkan	= array('png','jpg');
            $nama = $_FILES['file']['name'];
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $ukuran	= $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];	
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if($ukuran < 1044070){			
                    move_uploaded_file($file_tmp, 'gambar/'.$nama);
                       $id = $_GET['id'];

                        $result = mysqli_query($connect, "SELECT * FROM data_penyakit WHERE id='$id'");
                        while($penyakit = mysqli_fetch_array($result))
                        { 
                            unlink('gambar/'.$penyakit['gambar']);
                        }                    

                    $sql = "update data_penyakit set Nama_penyakit='$Nama_penyakit', detail_penyakit='$Detail_penyakit', saran_penyakit='$Saran_penyakit', gambar='$nama' where id='$id'";

                    if ($connect->query($sql) === TRUE) {
                        header("Location:index.php");
                        // echo 'FILE BERHASIL DI UPLOAD';

                    }else{
                        echo "<script>alert('GAGAL MENGUPLOAD GAMBAR!')</script>";
                    }
                    }else{
                        echo "<script>alert('UKURAN FILE TERLALU BESAR!')</script>";
                    echo '';
                    }
                }else{
                    echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!')</script>";
                }

                        // header("Location: index.php");
        }
                $connect->close();

                // die();

	}
        
?>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="../assets/img/profile-img.png" alt="" class="img-fluid rounded-circle">
        <h5 class="text-light" align="center">Implementasi Diagnosa Jenis Penyakit Kulit Pada Manusia</h5>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="menu.php"><i class="bx bxs-home"></i> <span>Beranda</span></a></li>
          <li class="active"><a href="admin.php"><i class="bx bx-user"></i> <span>Admin</span></a></li>
          <li class="active"><a href="penyakit.php"><i class="bx bx-bug"></i> <span>Penyakit</span></a></li>
          <li class="active"><a href="gejala.php"><i class="bx bxs-eyedropper"></i>Gejala</a></li>
          <li class="active"><a href="pengetahuan.php"><i class="bx bxs-flask"></i>Pengetahuan</a></li>
          <li class="active"><a href="post_keterangan.php"><i class="bx bx-file"></i>Post Keterangan</a></li>
          <li class="active"><a href="ubah_password.php"><i class="bx bxs-edit"></i>Ubah password</a></li>
          <li class="active"><a href="Tentang1.php"><i class="bx bxs-info-circle"></i>Tentang</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
          <ol>
            <li><a href="login.php">Login</a></li>
            <li><a href="Logout.php">Logout</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <div style="margin:50px;">

    <a href="index.php">Kembali</a>

    <table class="table table-bordered">
      <tbody>
        <form name="text_form" method="POST" action="" enctype="multipart/form-data">
          <br>
          <br>
          <table class="table table-bordered">

    <?php
            $id = $_GET['id'];

            $result = mysqli_query($connect, "SELECT * FROM data_penyakit WHERE id='$id'");
            while($penyakit = mysqli_fetch_array($result))
            { 
            // print("<pre>".print_r($penyakit,true)."</pre>");

    ?>

    

      <tbody>
        <tr>
          <td width="120">Nama Penyakit</td>
          <td>
            <input type="text" style="display:none;" name="id" value="<?= $penyakit['id'] ?>">
            <input value="<?= $penyakit['nama_penyakit'] ?>" required autocomplete="off" type="text" placeholder="Masukkan penyakit baru..." class="form-control" name="Nama_penyakit" size="30">
          </td>
        </tr>
      <tr>
        <td width="120">Detail Penyakit</td>
        <td> 
          <textarea required rows="4" cols="50" class="form-control" name="Detail_penyakit" type="text" placeholder="Masukkan detail penyakit baru..."><?= $penyakit['detail_penyakit'] ?> </textarea>
        </td>
      </tr>
      <tr>
        <td width="120">Saran Penyakit</td><td><textarea  required rows="4" cols="50" class="form-control" name="Saran_penyakit" type="text" placeholder="Masukkan saran penyakit baru..."><?= $penyakit['saran_penyakit'] ?> </textarea>
        </td>
      </tr>
          <tr>
            <td width="120">Gambar (Max 1 MB)</td>
            <td>Upload Gambar : <input type="file" class="form-control" name="file">
            </td>
          </tr>     
          <tr>
            <td>
              
            </td>
            <td>
            
            <input required type="submit" name="Submit" value="Simpan">
            <?php } ?>
              <!-- <input class="btn btn-success" type="submit" name="submit" value="Simpan"> -->
      <!-- <input class="btn btn-danger" type="button" name="batal" value="Batal" onclick="window.location.href='?module=penyakit';"> -->
    </td>
    </tr>
          </tbody>
        </table>
      </form>
          </tbody>
        </table>
</div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>