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

 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="css/font-awesome-4.2.0/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" media="all">
  <link href="css/owl-carousel/owl.theme.css" rel="stylesheet" media="all">
  <link href="css/magnific-popup.css" type="text/css" rel="stylesheet" media="all">
  <link href="css/font.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/fontello.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/main.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="css/paging.css" type="text/css" media="screen">
 

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

      </div>
    </section><!-- End Breadcrumbs -->

   <table class="table table-bordered">
      <tbody>
    <form method="post" action="tambahpenyakit.php">
      <button type="submit">Tambah Penyakit</button>
    </form>
    <form>
<input class="search" type="text" placeholder="Ketik dan tekan cari..." required>
      <input class="button" type="submit" value="   Cari   " name="Go">
</form>
</tbody>
</table>
        <div class="section-title">

        </div>
        <table class="table table-bordered table-striped konsultasi">
          <tbody class="PilihKondisi">
            <tr>
              <th>No</th>
              <th>Nama Penyakit</th>
              <th>Detail Penyakit</th>
              <th>Saran Penyakit</th>
              <th width="21%">Aksi</th>
            </tr>
          </tbody>
          <tr class="light">
            <td align="center">1</td>
            <td>Tinea Capitis</td>
            <td>penyakit yang disebabkan oleh infeksi jamur dermatofit pada kulit kepala dan batang rambut.</td>
            <td>Menggunakan sampo yang mengandung selenium sulphide povidone-iodine, atau ketoconazole. Pengobatan dengan sampo dilakukan 2 kali dalam seminggu, selama 1 bulan. Selanjutnya pasien dianjurkan untuk menemui dokter kembali.</td>
            <td align="center">
              <a type="button" class="btn btn-block btn-success" href="editpenyakit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
              <a type="button" class="btn btn-block btn-danger" href="JavaScript: confirmIt('Anda yakin akan menghapusnya ?','modul/penyakit/aksi_penyakit.php?module=penyakit&amp;act=hapus&amp;id=1','','','','u','n','Self','Self')" onmouseover="self.status=''; return true" onmouseout="self.status=''; return true">
        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
            </td>
          </tr>
          <tr>
            <td align="center">2</td>
            <td>Tinea Flavus</td>
            <td>penyakit yang disebabkan oleh infeksi jamur kronis terutama oleh T. schoenleini, T.violaceum dan M. gypseum.</td>
            <td>Pengobatan pada anak biasanya diberikan peroral dengan griseofulvin 10-25 mg/ kg berat badan perhari selama 6 minggu. Dosis pada orang dewasa adalah 500 mg perhari selama 6 minggu.</td>
            <td align="center">
              <a type="button" class="btn btn-block btn-success" href="editpenyakit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
              <a type="button" class="btn btn-block btn-danger" href="JavaScript: confirmIt('Anda yakin akan menghapusnya ?','modul/penyakit/aksi_penyakit.php?module=penyakit&amp;act=hapus&amp;id=1','','','','u','n','Self','Self')" onmouseover="self.status=''; return true" onmouseout="self.status=''; return true">
        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
            </td>
          </tr>

          <tr>
             <td align="center">3</td>
            <td>Tinea Barbae</td>
            <td>Merupakan infeksi jamur yang muncul pada area kulit wajah dan leher yang ditumbuhi rambut, seperti janggut dan kumis.</td>
            <td>Pemeberian salep antijamur seperti terbinafine dan memberikan obat minum tablet griseofulvin atau tablet terbinafine untuk beberapa minggu.</td>
            <td align="center">
              <a type="button" class="btn btn-block btn-success" href="editpenyakit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
              <a type="button" class="btn btn-block btn-danger" href="JavaScript: confirmIt('Anda yakin akan menghapusnya ?','modul/penyakit/aksi_penyakit.php?module=penyakit&amp;act=hapus&amp;id=1','','','','u','n','Self','Self')" onmouseover="self.status=''; return true" onmouseout="self.status=''; return true">
        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
            </td>
          </tr>

          <tr>
            <td align="center">4</td>
            <td>Tinea pedis</td>
            <td>adalah penyakit yang juga dikenal dengan istilah athlete’s foot. kondisi yang disebabkan oleh infeksi jamur. Jenis jamur yang sama parahnya bisa menginfeksi area lain, seperti pada kulit, rambut, dan kuku. </td>
            <td>Pemberian obat topikal atau antijamur oral. Obat-obatan dapat terus digunakan selama 2-6 minggu atau lebih. Obat antijamur oral dapat dikonsumsi selama dua minggu atau lebih tergantung seberapa parah atau jenis infeksi yang menyerang.</td>
            <td align="center">
              <a type="button" class="btn btn-block btn-success" href="editpenyakit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
              <a type="button" class="btn btn-block btn-danger" href="JavaScript: confirmIt('Anda yakin akan menghapusnya ?','modul/penyakit/aksi_penyakit.php?module=penyakit&amp;act=hapus&amp;id=1','','','','u','n','Self','Self')" onmouseover="self.status=''; return true" onmouseout="self.status=''; return true">
        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
            </td>
          </tr>

          <tr>
             <td align="center">5</td>
            <td>Tinea cruris</td>
            <td>Tinea cruris atau yang biasa disebut dengan jock itch adalah infeksi fungi atau jamur yang menjangkiti kulit di bagian paha dalam. </td>
            <td>Pemberian bedak, salep, obat semprot, atau lotion anti-jamur, agar ruam bisa segera hilang. Namun untuk mencegah tinea cruris muncul kembali, terus lakukan pengobatan dua kali sehari setidaknya selama kurun waktu sepuluh hari.</td>
            <td align="center">
              <a type="button" class="btn btn-block btn-success" href="editpenyakit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
              <a type="button" class="btn btn-block btn-danger" href="JavaScript: confirmIt('Anda yakin akan menghapusnya ?','modul/penyakit/aksi_penyakit.php?module=penyakit&amp;act=hapus&amp;id=1','','','','u','n','Self','Self')" onmouseover="self.status=''; return true" onmouseout="self.status=''; return true">
        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
            </td>
          </tr>

          <tr>
             <td align="center">6</td>
            <td>Tinea versicolor</td>
            <td>Tinea versicolor atau biasa disebut juga panu. Panu merupakan infeksi akibat jamur Malassezia yang ditemukan pada permukaan kulit.  </td>
            <td>Pemberian Krim dan lotion yang mengandung selenium sulfide, ketoconazole, atau pyrithione zinc yaitu Gel terbinafine, Krim ciclopirox, Larutan natrium tiosulfat. Dengan selang waktu antara 3 hari atau sekitar 2 minggu, tergantung tingkat keparahan panu. </td>
            <td align="center">
              <a type="button" class="btn btn-block btn-success" href="editpenyakit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
              <a type="button" class="btn btn-block btn-danger" href="JavaScript: confirmIt('Anda yakin akan menghapusnya ?','modul/penyakit/aksi_penyakit.php?module=penyakit&amp;act=hapus&amp;id=1','','','','u','n','Self','Self')" onmouseover="self.status=''; return true" onmouseout="self.status=''; return true">
        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
            </td>
          </tr>

          <tr>
            <td align="center">7</td>
            <td>Tinea corporis</td>
            <td>Tinea corporis adalah infeksi jamur golongan dermatophytes, yaitu trichophyton. Jamur ini dapat berkembang biak pada jaringan keratin, yaitu jaringan keras dan tahan air yang terdapat di kulit, rambut, atau kuku. </td>
            <td>Memberikan obat antijamur krim atau salep seperti Clitrimazol, Mikonazol, Econazole, Ketoconazol dan Terbinafine. </td>
            <td align="center">
              <a type="button" class="btn btn-block btn-success" href="editpenyakit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
              <a type="button" class="btn btn-block btn-danger" href="JavaScript: confirmIt('Anda yakin akan menghapusnya ?','modul/penyakit/aksi_penyakit.php?module=penyakit&amp;act=hapus&amp;id=1','','','','u','n','Self','Self')" onmouseover="self.status=''; return true" onmouseout="self.status=''; return true">
        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
            </td>
          </tr>

          <tr>
             <td align="center">8</td>
            <td>Otomycosis</td>
            <td>Otomikosis adalah infeksi pada telinga yang disebabkan oleh jamur. Infeksi ini bisa menyerang salah satu atau kedua telinga. </td>
            <td>Pemberian obat antijamur dalam bentuk tetes telinga akan diberikan untuk memberantas jamur dan menyembuhkan infeksi. Contohnya, econazole, miconazole, dan amfoterisin B. Obat-obat ini bisa berbentuk obat topikal (oles) maupun obat tetes telinga. </td>
            <td align="center">
              <a type="button" class="btn btn-block btn-success" href="editpenyakit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
              <a type="button" class="btn btn-block btn-danger" href="JavaScript: confirmIt('Anda yakin akan menghapusnya ?','modul/penyakit/aksi_penyakit.php?module=penyakit&amp;act=hapus&amp;id=1','','','','u','n','Self','Self')" onmouseover="self.status=''; return true" onmouseout="self.status=''; return true">
        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
            </td>
          </tr>

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