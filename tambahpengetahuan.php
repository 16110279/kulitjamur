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

    <table class="table table-bordered">
      <tbody>
        <form name="text_form" method="POST" action="modul/pengetahuan/aksi_pengetahuan.php?module=pengetahuan&amp;act=input" onsubmit="return Blank_TextField_Validator()">
          <br><br><table class="table table-bordered">
      <tbody><tr><td width="120">Penyakit</td><td><select class="form-control" name="kode_penyakit" id="kode_penyakit"><option value="">- Pilih Penyakit -</option><option value="4"> Tinea Capitis </option><option value="9"> Tinea Flavus</option><option value="11">Tinea Barbae</option><option value="6">Tinea Pedis</option><option value="1">Tinea Cruris</option><option value="10">Tinea Versicolor</option><option value="3">Tinea Circinata</option><option value="7">Otomycosis</option><option value="2">Nocardiosis</option><option value="12">Candidiasis</option><option value="13">Actinomycosis</option><option value="8">Maduromycosis</option><option value="5">Coccidiodimycosis</option><option value="5">Sporotricosis</option><option value="5">Blastomycosis</option></select></td></tr>
    <tr><td>Gejala</td><td><select class="form-control" name="kode_gejala" id="kode_gejala"><option value="">- Pilih Gejala -</option><option value="41">Badan kurus</option><option value="5">Batuk</option><option value="37">Batuk berdarah</option><option value="31">Bergerombol di sudut kandang</option><option value="36">Bernafas dengan mulut sambil menjulurkan leher</option><option value="4">Bersin-bersin</option><option value="6">Bulu kusam dan berkerut</option><option value="7">Diare</option><option value="39">Duduk dengan sikap membungkuk</option><option value="16">Jengger pucat</option><option value="17">Kaki dan sayap lumpuh</option><option value="43">Kaki pincang</option><option value="9">Kedinginan</option><option value="40">Kelihatan mengantuk dengan bulu berdiri</option><option value="18">Keluar cairan dari mata dan hidung</option><option value="35">Kelumpuhan pada tembolok</option><option value="19">Kepala bengkak</option><option value="20">Kepala terputar</option><option value="26">Kerabang telur kasar</option><option value="33">Kerabang telur pucat</option><option value="30">Kotoran atau feses berdarah</option><option value="28">Kotoran kuning kehijauan</option><option value="25">Mati secara mendadak</option><option value="32">Mematuk daerah kloaka</option><option value="11">Mencret kehijau-hijauan</option><option value="12">Mencret keputih-putihan</option><option value="13">Muka pucat</option><option value="3">Nafas ngorok basah</option><option value="2">Nafas sesak / megap-megap</option><option value="1">Nafsu makan berkurang </option><option value="14">Nampak membiru</option><option value="29">Pembengkakan daerah fasial dan sekitar mata</option><option value="21">Pembengkakan dari sinus dan mata</option><option value="15">Pembengkakan pial</option><option value="22">Perut membesar</option><option value="8">Produksi telur menurun</option><option value="27">Putih Telur Encer</option><option value="23">Sayap menggantung</option><option value="10">Tampak lesu</option><option value="34">Telur lebih kecil</option><option value="24">Terdapat kotoran putih menempel disekitar anus</option><option value="42">Terdapat lendir bercampur darah pada rongga mulut</option><option value="38">Tidur paruhnya diletakkan dilantai</option></select></td></tr>
    <tr><td>MB</td><td><input autocomplete="off" placeholder="Masukkan MB" type="text" class="form-control" name="mb" size="15"></td></tr>
    <tr><td>MD</td><td><input autocomplete="off" placeholder="Masukkan MD" type="text" class="form-control" name="md" size="15"></td></tr>
      <tr><td></td><td><input class="btn btn-success" type="submit" name="submit" value="Simpan">
      <input class="btn btn-danger" type="button" name="batal" value="Batal" onclick="window.location.href='?module=pengetahuan';"></td></tr>
          </tbody></table></form>
          </tbody>
        </table>


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