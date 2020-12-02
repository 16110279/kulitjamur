<?php
error_reporting(0);
include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Diagnosa Jenis Penyakit Kulit pada Manusia</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.2.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.png" alt="" class="img-fluid rounded-circle">
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
      <?php
          if(isset($_POST['update']))
          {   
              $id = $_POST['Id'];

              $namalengkap=$_POST['Nama_lengkap'];
              $username=$_POST['Username'];

              // update user data
              $result = mysqli_query($connect, "UPDATE admin SET Username='$username',Nama_Lengkap='$namalengkap' WHERE Id=$id");
              
              // Redirect to homepage to display updated user in list
              header("Location: admin.php");
          }
      ?>

      
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="admin">
          <br><br>
          <table class="table table-bordered">
    <tbody>
    <?php
      $admin_id = $_GET['id'];
     $result = mysqli_query($connect, "SELECT * FROM admin WHERE id='$admin_id'");
  
      while($user_data = mysqli_fetch_array($result))
      { ?>

            <input required autocomplete="off" style="display:none;" type="text" class="form-control" name="Id" value="<?php echo $user_data['Id'] ?>" size="30">
          <td>Nama Lengkap</td>   
          <td>  
            <input required autocomplete="off" placeholder="Masukkan nama lengkap..." type="text" class="form-control" name="Nama_lengkap" size="30" value="<?php echo $user_data['Nama_Lengkap'] ?>">
          </td>
        </tr>
          <tr>
            <td>Username</td>  
             <td>  <input required autocomplete="off" placeholder="Masukkan username..." type="text" class="form-control" name="Username" size="30" value="<?php echo $user_data['Username'] ?>"></td></tr>
      <tr>
      <tr>
        <td>
     <td><input type="submit" name="update" value="Update"></td>
      </td>
    </tr>
      <?php } ?>

    </tbody>

</table>
</form>


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>