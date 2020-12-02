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
    <form method="POST" action="tambahadmin.php">
      <button type="submit">Tambah Admin</button>
    </form>
    <form>
<input class="search" type="text" placeholder="Ketik dan tekan cari..." required>
      <input class="button" type="submit" value="   Cari   " name="Go">
</form>
</tbody>
</table>
        <div class="section-title">
          
        </div>
        <table class="table table-bordered" style="overflow-x=auto" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Nama Lengkap</th>
              <th width="21%">Aksi</th>
            </tr>
          </thead>
          <tbody>

    <?php  
$no = 1;

include_once('koneksi.php');
$result = mysqli_query($connect, "SELECT * FROM admin");

    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$user_data['Username']."</td>";
        echo "<td>".$user_data['Nama_Lengkap']."</td>";    
        echo "<td><a href='editadmin.php?id=$user_data[Id]'>Edit</a> | <a href='deleteadmin.php?id=$user_data[Id]'>Delete</a></td></tr>";        
      $no = $no+1;
      }
    ?>

            <?php

              //use for MySQLi Procedural
              // $query = mysqli_query($conn, $sql);
              // while($row = mysqli_fetch_assoc($query)){
              //  echo
              //  "<tr>
              //    <td>".$row['id']."</td>
              //    <td>".$row['firstname']."</td>
              //    <td>".$row['lastname']."</td>
              //    <td>".$row['address']."</td>
              //    <td>
              //      <a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
              //      <a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
              //    </td>
              //  </tr>";
              //  include('edit_delete_modal.php');
              // }
              /////////////////

            ?>
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