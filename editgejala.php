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
     <form name="text_form" method="POST" action="modul/gejala/aksi_gejala.php?module=gejala&amp;act=update" onsubmit="return Blank_TextField_Validator()">
          <input type="hidden" name="id" value="1">
          <br><br>
          <table class="table table-bordered">
      <tbody>
        <tr>
          <td width="120">Nama Gejala</td>
        <td><input autocomplete="off" type="text" class="form-control" name="nama_gejala" size="30" value="Nafsu makan berkurang "></td></tr>
          <tr>
            <td>
              
            </td>
            <td>
              <input class="btn btn-success" type="submit" name="submit" value="Simpan">
      <input class="btn btn-danger" type="button" value="Batal" onclick="window.location.href='?module=gejala';"></td></tr>
          </tbody></table></form>
    </section><!-- End Breadcrumbs -->


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