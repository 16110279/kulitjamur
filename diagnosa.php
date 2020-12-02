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
          <li class="active"><a href="index.php"><i class="bx bxs-home"></i> <span>Beranda</span></a></li>
          <li class="active"><a href="Diagnosa.php"><i class="bx bx-zoom-in"></i> <span>Diagnosa</span></a></li>
          <li class="active"><a href="Riwayat.php"><i class="bx bxs-hourglass-bottom"></i> <span>Riwayat</span></a></li>
          <li class="active"><a href="Keterangan.php"><i class="bx bx-file"></i>Keterangan</a></li>
          <li class="active"><a href="Tentang.php"><i class="bx bxs-info-circle"></i>Tentang</a></li>

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
            <li><a href="login.php"><i class="bx bxs-right-arrow-square"></i><span>Login</span></a></li>
            <li><a href="home.php"><i class="bx bxs-left-arrow-circle"></i><span>Logout</span></a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Diagnosa Penyakit</h2>
          <p>Silahkan memilih gejala sesuai dengan kondisi keadaan kulit yang dirasakan </p>
        </div>
        <table class="table table-bordered table-striped konsultasi">
          <tbody class="PilihKondisi">
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Gejala</th>
              <th width="20%">Pilih Kondisi</th>
            </tr>
            <tr>
              <td class="opsi">1</td>
              <td class="opsi">G001</td>
              <td class="Gejala">Kulit bersisik</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                  <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="1_1">Pasti ya</option>
                  <option data-id="2" value="1_2">Hampir pasti ya</option>
                  <option data-id="3" value="1_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="1_4">Mungkin ya</option>
                  <option data-id="5" value="1_5">Tidak tahu</option>
                  <option data-id="6" value="1_6">Mungkin tidak</option>
                  <option data-id="7" value="1_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="1_8">Hampir pasti tidak</option>
                  <option data-id="9" value="1_9">Pasti tidak</option>
                </select>
              </td>
              <script type="text/javascript">
                $(document).ready(function() { 
                  var arcolor = new Array ('#ffffff', '#cc66ff', '#019AFF', '#00CBFD', '#00FEFE', '#A4F804', '#FFFC00', '#FDCD01', '#FD9A01', '#FB6700'); 
                setColor();
                $('.pilihkondisi').on('change', 'tr td select#s11', function() {
                  setcolor();
                });
          function setColor()
          {
            var selectedItem = $('tr td select#s11:selected');
            var color = arcolor [selectedItem.data("id")];
            $('tr td select#s11.opsikondisi').css('background-color', color);
            console.log(color);
          }
        });
              == $0
        </script>
      </tr>
            <tr>
              <td class="opsi">2</td>
              <td class="opsi">G002</td>
              <td class="Gejala">Adanya kerontokan pada rambut</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="2_1">Pasti ya</option>
                  <option data-id="2" value="2_2">Hampir pasti ya</option>
                  <option data-id="3" value="2_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="2_4">Mungkin ya</option>
                  <option data-id="5" value="2_5">Tidak tahu</option>
                  <option data-id="6" value="2_6">Mungkin tidak</option>
                  <option data-id="7" value="2_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="2_8">Hampir pasti tidak</option>
                  <option data-id="9" value="2_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">3</td>
              <td class="opsi">G003</td>
              <td class="Gejala">Adanya nanah (pola pustula)</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="3_1">Pasti ya</option>
                  <option data-id="2" value="3_2">Hampir pasti ya</option>
                  <option data-id="3" value="3_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="3_4">Mungkin ya</option>
                  <option data-id="5" value="3_5">Tidak tahu</option>
                  <option data-id="6" value="3_6">Mungkin tidak</option>
                  <option data-id="7" value="3_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="3_8">Hampir pasti tidak</option>
                  <option data-id="9" value="3_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">4</td>
              <td class="opsi">G004</td>
              <td class="Gejala">Terdapat titik hitam</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="4_1">Pasti ya</option>
                  <option data-id="2" value="4_2">Hampir pasti ya</option>
                  <option data-id="3" value="4_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="4_4">Mungkin ya</option>
                  <option data-id="5" value="4_5">Tidak tahu</option>
                  <option data-id="6" value="4_6">Mungkin tidak</option>
                  <option data-id="7" value="4_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="4_8">Hampir pasti tidak</option>
                  <option data-id="9" value="4_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">5</td>
              <td class="opsi">G005</td>
              <td class="Gejala">Pembengkakan kelenjar getah bening</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="5_1">Pasti ya</option>
                  <option data-id="2" value="5_2">Hampir pasti ya</option>
                  <option data-id="3" value="5_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="5_4">Mungkin ya</option>
                  <option data-id="5" value="5_5">Tidak tahu</option>
                  <option data-id="6" value="5_6">Mungkin tidak</option>
                  <option data-id="7" value="5_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="5_8">Hampir pasti tidak</option>
                  <option data-id="9" value="5_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">6</td>
              <td class="opsi">G006</td>
              <td class="Gejala">Demam</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="6_1">Pasti ya</option>
                  <option data-id="2" value="6_2">Hampir pasti ya</option>
                  <option data-id="3" value="6_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="6_4">Mungkin ya</option>
                  <option data-id="5" value="6_5">Tidak tahu</option>
                  <option data-id="6" value="6_6">Mungkin tidak</option>
                  <option data-id="7" value="6_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="6_8">Hampir pasti tidak</option>
                  <option data-id="9" value="6_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">7</td>
              <td class="opsi">G007</td>
              <td class="Gejala">Ruam kemerahan pada kulit</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="7_1">Pasti ya</option>
                  <option data-id="2" value="7_2">Hampir pasti ya</option>
                  <option data-id="3" value="7_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="7_4">Mungkin ya</option>
                  <option data-id="5" value="7_5">Tidak tahu</option>
                  <option data-id="6" value="7_6">Mungkin tidak</option>
                  <option data-id="7" value="7_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="7_8">Hampir pasti tidak</option>
                  <option data-id="9" value="7_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">8</td>
              <td class="opsi">G008</td>
              <td class="Gejala">Lesi menjadi luad dan merah</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="8_1">Pasti ya</option>
                  <option data-id="2" value="8_2">Hampir pasti ya</option>
                  <option data-id="3" value="8_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="8_4">Mungkin ya</option>
                  <option data-id="5" value="8_5">Tidak tahu</option>
                  <option data-id="6" value="8_6">Mungkin tidak</option>
                  <option data-id="7" value="8_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="8_8">Hampir pasti tidak</option>
                  <option data-id="9" value="8_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">9</td>
              <td class="opsi">G009</td>
              <td class="Gejala">Kulit mengalami astrofi</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="9_1">Pasti ya</option>
                  <option data-id="2" value="9_2">Hampir pasti ya</option>
                  <option data-id="3" value="9_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="9_4">Mungkin ya</option>
                  <option data-id="5" value="9_5">Tidak tahu</option>
                  <option data-id="6" value="9_6">Mungkin tidak</option>
                  <option data-id="7" value="9_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="9_8">Hampir pasti tidak</option>
                  <option data-id="9" value="9_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">10</td>
              <td class="opsi">G010</td>
              <td class="Gejala">Terdapat benjolan berwarna merah</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="10_1">Pasti ya</option>
                  <option data-id="2" value="10_2">Hampir pasti ya</option>
                  <option data-id="3" value="10_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="10_4">Mungkin ya</option>
                  <option data-id="5" value="10_5">Tidak tahu</option>
                  <option data-id="6" value="10_6">Mungkin tidak</option>
                  <option data-id="7" value="10_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="10_8">Hampir pasti tidak</option>
                  <option data-id="9" value="10_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">11</td>
              <td class="opsi">G011</td>
              <td class="Gejala">Terdapat benjolah merah dan bengkak</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="11_1">Pasti ya</option>
                  <option data-id="2" value="11_2">Hampir pasti ya</option>
                  <option data-id="3" value="11_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="11_4">Mungkin ya</option>
                  <option data-id="5" value="11_5">Tidak tahu</option>
                  <option data-id="6" value="11_6">Mungkin tidak</option>
                  <option data-id="7" value="11_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="11_8">Hampir pasti tidak</option>
                  <option data-id="9" value="11_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">12</td>
              <td class="opsi">G012</td>
              <td class="Gejala">Benjolan tidak terasa gatal</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="12_1">Pasti ya</option>
                  <option data-id="2" value="12_2">Hampir pasti ya</option>
                  <option data-id="3" value="12_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="12_4">Mungkin ya</option>
                  <option data-id="5" value="12_5">Tidak tahu</option>
                  <option data-id="6" value="12_6">Mungkin tidak</option>
                  <option data-id="7" value="12_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="12_8">Hampir pasti tidak</option>
                  <option data-id="9" value="12_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">13</td>
              <td class="opsi">G013</td>
              <td class="Gejala">Adanya rasa gatal</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="13_1">Pasti ya</option>
                  <option data-id="2" value="13_2">Hampir pasti ya</option>
                  <option data-id="3" value="13_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="13_4">Mungkin ya</option>
                  <option data-id="5" value="13_5">Tidak tahu</option>
                  <option data-id="6" value="13_6">Mungkin tidak</option>
                  <option data-id="7" value="13_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="13_8">Hampir pasti tidak</option>
                  <option data-id="9" value="13_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">14</td>
              <td class="opsi">G014</td>
              <td class="Gejala">Adanya rasa nyeri</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="14_1">Pasti ya</option>
                  <option data-id="2" value="14_2">Hampir pasti ya</option>
                  <option data-id="3" value="14_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="14_4">Mungkin ya</option>
                  <option data-id="5" value="14_5">Tidak tahu</option>
                  <option data-id="6" value="14_6">Mungkin tidak</option>
                  <option data-id="7" value="14_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="14_8">Hampir pasti tidak</option>
                  <option data-id="9" value="14_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">15</td>
              <td class="opsi">G015</td>
              <td class="Gejala">Kulit pecah</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="15_1">Pasti ya</option>
                  <option data-id="2" value="15_2">Hampir pasti ya</option>
                  <option data-id="3" value="15_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="15_4">Mungkin ya</option>
                  <option data-id="5" value="15_5">Tidak tahu</option>
                  <option data-id="6" value="15_6">Mungkin tidak</option>
                  <option data-id="7" value="15_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="15_8">Hampir pasti tidak</option>
                  <option data-id="9" value="15_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">16</td>
              <td class="opsi">G016</td>
              <td class="Gejala">Warna kulit lebih terang atau lebih gelap</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="16_1">Pasti ya</option>
                  <option data-id="2" value="16_2">Hampir pasti ya</option>
                  <option data-id="3" value="16_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="16_4">Mungkin ya</option>
                  <option data-id="5" value="16_5">Tidak tahu</option>
                  <option data-id="6" value="16_6">Mungkin tidak</option>
                  <option data-id="7" value="16_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="16_8">Hampir pasti tidak</option>
                  <option data-id="9" value="16_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">17</td>
              <td class="opsi">G017</td>
              <td class="Gejala">Terasa perih seperti terbakar</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="17_1">Pasti ya</option>
                  <option data-id="2" value="17_2">Hampir pasti ya</option>
                  <option data-id="3" value="17_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="17_4">Mungkin ya</option>
                  <option data-id="5" value="17_5">Tidak tahu</option>
                  <option data-id="6" value="17_6">Mungkin tidak</option>
                  <option data-id="7" value="17_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="17_8">Hampir pasti tidak</option>
                  <option data-id="9" value="17_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">18</td>
              <td class="opsi">G018</td>
              <td class="Gejala">Kulit terasa kering</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="18_1">Pasti ya</option>
                  <option data-id="2" value="18_2">Hampir pasti ya</option>
                  <option data-id="3" value="18_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="18_4">Mungkin ya</option>
                  <option data-id="5" value="18_5">Tidak tahu</option>
                  <option data-id="6" value="18_6">Mungkin tidak</option>
                  <option data-id="7" value="18_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="18_8">Hampir pasti tidak</option>
                  <option data-id="9" value="18_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">19</td>
              <td class="opsi">G019</td>
              <td class="Gejala">Rentan menghilang dicuaca yang lebih dingin</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="19_1">Pasti ya</option>
                  <option data-id="2" value="19_2">Hampir pasti ya</option>
                  <option data-id="3" value="19_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="19_4">Mungkin ya</option>
                  <option data-id="5" value="19_5">Tidak tahu</option>
                  <option data-id="6" value="19_6">Mungkin tidak</option>
                  <option data-id="7" value="19_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="19_8">Hampir pasti tidak</option>
                  <option data-id="9" value="19_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">20</td>
              <td class="opsi">G020</td>
              <td class="Gejala">Makin terlihat saat berjemur</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="20_1">Pasti ya</option>
                  <option data-id="2" value="20_2">Hampir pasti ya</option>
                  <option data-id="3" value="20_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="200_4">Mungkin ya</option>
                  <option data-id="5" value="20_5">Tidak tahu</option>
                  <option data-id="6" value="20_6">Mungkin tidak</option>
                  <option data-id="7" value="20_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="20_8">Hampir pasti tidak</option>
                  <option data-id="9" value="20_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">21</td>
              <td class="opsi">G021</td>
              <td class="Gejala">Benjolan tebal berbentuk cincin atau lingkaran</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="21_1">Pasti ya</option>
                  <option data-id="2" value="21_2">Hampir pasti ya</option>
                  <option data-id="3" value="21_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="21_4">Mungkin ya</option>
                  <option data-id="5" value="21_5">Tidak tahu</option>
                  <option data-id="6" value="21_6">Mungkin tidak</option>
                  <option data-id="7" value="21_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="21_8">Hampir pasti tidak</option>
                  <option data-id="9" value="21_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">22</td>
              <td class="opsi">G022</td>
              <td class="Gejala">Benjolan dalam lingkaran berwarna putih bersisik</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="22_1">Pasti ya</option>
                  <option data-id="2" value="22_2">Hampir pasti ya</option>
                  <option data-id="3" value="22_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="22_4">Mungkin ya</option>
                  <option data-id="5" value="22_5">Tidak tahu</option>
                  <option data-id="6" value="22_6">Mungkin tidak</option>
                  <option data-id="7" value="22_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="22_8">Hampir pasti tidak</option>
                  <option data-id="9" value="22_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">23</td>
              <td class="opsi">G023</td>
              <td class="Gejala">Adanya rasa gatal dibagian telinga</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="23_1">Pasti ya</option>
                  <option data-id="2" value="23_2">Hampir pasti ya</option>
                  <option data-id="3" value="23_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="23_4">Mungkin ya</option>
                  <option data-id="5" value="23_5">Tidak tahu</option>
                  <option data-id="6" value="23_6">Mungkin tidak</option>
                  <option data-id="7" value="23_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="23_8">Hampir pasti tidak</option>
                  <option data-id="9" value="23_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">24</td>
              <td class="opsi">G024</td>
              <td class="Gejala">Nyeri pada telinga</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="24_1">Pasti ya</option>
                  <option data-id="2" value="24_2">Hampir pasti ya</option>
                  <option data-id="3" value="24_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="24_4">Mungkin ya</option>
                  <option data-id="5" value="24_5">Tidak tahu</option>
                  <option data-id="6" value="24_6">Mungkin tidak</option>
                  <option data-id="7" value="24_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="24_8">Hampir pasti tidak</option>
                  <option data-id="9" value="24_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">25</td>
              <td class="opsi">G025</td>
              <td class="Gejala">Keluar cairan bening dari dalam telinga</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="25_1">Pasti ya</option>
                  <option data-id="2" value="25_2">Hampir pasti ya</option>
                  <option data-id="3" value="25_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="25_4">Mungkin ya</option>
                  <option data-id="5" value="25_5">Tidak tahu</option>
                  <option data-id="6" value="25_6">Mungkin tidak</option>
                  <option data-id="7" value="25_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="25_8">Hampir pasti tidak</option>
                  <option data-id="9" value="25_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">26</td>
              <td class="opsi">G026</td>
              <td class="Gejala">Telinga berdenging</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="26_1">Pasti ya</option>
                  <option data-id="2" value="26_2">Hampir pasti ya</option>
                  <option data-id="3" value="26_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="26_4">Mungkin ya</option>
                  <option data-id="5" value="26_5">Tidak tahu</option>
                  <option data-id="6" value="26_6">Mungkin tidak</option>
                  <option data-id="7" value="26_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="26_8">Hampir pasti tidak</option>
                  <option data-id="9" value="26_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">27</td>
              <td class="opsi">G027</td>
              <td class="Gejala">Kehilangan kemampuan dengar</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="27_1">Pasti ya</option>
                  <option data-id="2" value="27_2">Hampir pasti ya</option>
                  <option data-id="3" value="27_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="27_4">Mungkin ya</option>
                  <option data-id="5" value="27_5">Tidak tahu</option>
                  <option data-id="6" value="27_6">Mungkin tidak</option>
                  <option data-id="7" value="27_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="27_8">Hampir pasti tidak</option>
                  <option data-id="9" value="27_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">28</td>
              <td class="opsi">G028</td>
              <td class="Gejala">Terdapat luka pada kulit</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="28_1">Pasti ya</option>
                  <option data-id="2" value="28_2">Hampir pasti ya</option>
                  <option data-id="3" value="28_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="28_4">Mungkin ya</option>
                  <option data-id="5" value="28_5">Tidak tahu</option>
                  <option data-id="6" value="28_6">Mungkin tidak</option>
                  <option data-id="7" value="28_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="28_8">Hampir pasti tidak</option>
                  <option data-id="9" value="28_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">29</td>
              <td class="opsi">G029</td>
              <td class="Gejala">Adanya pembengkakan pada kulit</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="29_1">Pasti ya</option>
                  <option data-id="2" value="29_2">Hampir pasti ya</option>
                  <option data-id="3" value="29_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="29_4">Mungkin ya</option>
                  <option data-id="5" value="29_5">Tidak tahu</option>
                  <option data-id="6" value="29_6">Mungkin tidak</option>
                  <option data-id="7" value="29_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="29_8">Hampir pasti tidak</option>
                  <option data-id="9" value="29_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">30</td>
              <td class="opsi">G030</td>
              <td class="Gejala">Ruam gatal dibagian lipatan kulit</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="30_1">Pasti ya</option>
                  <option data-id="2" value="30_2">Hampir pasti ya</option>
                  <option data-id="3" value="30_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="30_4">Mungkin ya</option>
                  <option data-id="5" value="30_5">Tidak tahu</option>
                  <option data-id="6" value="30_6">Mungkin tidak</option>
                  <option data-id="7" value="30_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="30_8">Hampir pasti tidak</option>
                  <option data-id="9" value="30_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">31</td>
              <td class="opsi">G031</td>
              <td class="Gejala">Peradangan pada area yang terinfeksi</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="31_1">Pasti ya</option>
                  <option data-id="2" value="31_2">Hampir pasti ya</option>
                  <option data-id="3" value="31_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="31_4">Mungkin ya</option>
                  <option data-id="5" value="31_5">Tidak tahu</option>
                  <option data-id="6" value="31_6">Mungkin tidak</option>
                  <option data-id="7" value="31_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="31_8">Hampir pasti tidak</option>
                  <option data-id="9" value="31_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">32</td>
              <td class="opsi">G032</td>
              <td class="Gejala">Terbentuknya jaringan parut</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="32_1">Pasti ya</option>
                  <option data-id="2" value="32_2">Hampir pasti ya</option>
                  <option data-id="3" value="32_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="32_4">Mungkin ya</option>
                  <option data-id="5" value="32_5">Tidak tahu</option>
                  <option data-id="6" value="32_6">Mungkin tidak</option>
                  <option data-id="7" value="32_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="32_8">Hampir pasti tidak</option>
                  <option data-id="9" value="32_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">33</td>
              <td class="opsi">G033</td>
              <td class="Gejala">Adanya rasa lelah</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="33_1">Pasti ya</option>
                  <option data-id="2" value="33_2">Hampir pasti ya</option>
                  <option data-id="3" value="33_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="33_4">Mungkin ya</option>
                  <option data-id="5" value="33_5">Tidak tahu</option>
                  <option data-id="6" value="33_6">Mungkin tidak</option>
                  <option data-id="7" value="33_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="33_8">Hampir pasti tidak</option>
                  <option data-id="9" value="33_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">34</td>
              <td class="opsi">G034</td>
              <td class="Gejala">Terdapat benjolan keras pada kaki</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="34_1">Pasti ya</option>
                  <option data-id="2" value="34_2">Hampir pasti ya</option>
                  <option data-id="3" value="34_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="34_4">Mungkin ya</option>
                  <option data-id="5" value="34_5">Tidak tahu</option>
                  <option data-id="6" value="34_6">Mungkin tidak</option>
                  <option data-id="7" value="34_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="34_8">Hampir pasti tidak</option>
                  <option data-id="9" value="34_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">35</td>
              <td class="opsi">G035</td>
              <td class="Gejala">TMengeluarkan sekret (lendir) yang purulen (kental, putih)</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="35_1">Pasti ya</option>
                  <option data-id="2" value="35_2">Hampir pasti ya</option>
                  <option data-id="3" value="35_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="35_4">Mungkin ya</option>
                  <option data-id="5" value="35_5">Tidak tahu</option>
                  <option data-id="6" value="35_6">Mungkin tidak</option>
                  <option data-id="7" value="35_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="35_8">Hampir pasti tidak</option>
                  <option data-id="9" value="35_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">36</td>
              <td class="opsi">G036</td>
              <td class="Gejala">Batuk-batuk</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="36_1">Pasti ya</option>
                  <option data-id="2" value="36_2">Hampir pasti ya</option>
                  <option data-id="3" value="36_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="36_4">Mungkin ya</option>
                  <option data-id="5" value="36_5">Tidak tahu</option>
                  <option data-id="6" value="36_6">Mungkin tidak</option>
                  <option data-id="7" value="36_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="36_8">Hampir pasti tidak</option>
                  <option data-id="9" value="36_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">37</td>
              <td class="opsi">G037</td>
              <td class="Gejala">Nyeri sendi</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="37_1">Pasti ya</option>
                  <option data-id="2" value="37_2">Hampir pasti ya</option>
                  <option data-id="3" value="37_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="37_4">Mungkin ya</option>
                  <option data-id="5" value="37_5">Tidak tahu</option>
                  <option data-id="6" value="37_6">Mungkin tidak</option>
                  <option data-id="7" value="37_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="37_8">Hampir pasti tidak</option>
                  <option data-id="9" value="37_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">38</td>
              <td class="opsi">G038</td>
              <td class="Gejala">Sakit kepala</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="38_1">Pasti ya</option>
                  <option data-id="2" value="38_2">Hampir pasti ya</option>
                  <option data-id="3" value="38_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="38_4">Mungkin ya</option>
                  <option data-id="5" value="38_5">Tidak tahu</option>
                  <option data-id="6" value="38_6">Mungkin tidak</option>
                  <option data-id="7" value="38_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="38_8">Hampir pasti tidak</option>
                  <option data-id="9" value="38_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">39</td>
              <td class="opsi">G039</td>
              <td class="Gejala">Bintik menegluarkan cairan bening</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="39_1">Pasti ya</option>
                  <option data-id="2" value="39_2">Hampir pasti ya</option>
                  <option data-id="3" value="39_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="39_4">Mungkin ya</option>
                  <option data-id="5" value="39_5">Tidak tahu</option>
                  <option data-id="6" value="39_6">Mungkin tidak</option>
                  <option data-id="7" value="39_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="39_8">Hampir pasti tidak</option>
                  <option data-id="9" value="39_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">40</td>
              <td class="opsi">G040</td>
              <td class="Gejala">Bintik terasa nyeri jika ditekan</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="40_1">Pasti ya</option>
                  <option data-id="2" value="40_2">Hampir pasti ya</option>
                  <option data-id="3" value="40_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="40_4">Mungkin ya</option>
                  <option data-id="5" value="40_5">Tidak tahu</option>
                  <option data-id="6" value="40_6">Mungkin tidak</option>
                  <option data-id="7" value="40_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="40_8">Hampir pasti tidak</option>
                  <option data-id="9" value="40_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">41</td>
              <td class="opsi">G041</td>
              <td class="Gejala">Munculnya keingat pada malam hari</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="41_1">Pasti ya</option>
                  <option data-id="2" value="41_2">Hampir pasti ya</option>
                  <option data-id="3" value="41_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="41_4">Mungkin ya</option>
                  <option data-id="5" value="41_5">Tidak tahu</option>
                  <option data-id="6" value="41_6">Mungkin tidak</option>
                  <option data-id="7" value="41_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="41_8">Hampir pasti tidak</option>
                  <option data-id="9" value="41_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">42</td>
              <td class="opsi">G042</td>
              <td class="Gejala">Adanya rasa nyeri otot</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="42_1">Pasti ya</option>
                  <option data-id="2" value="42_2">Hampir pasti ya</option>
                  <option data-id="3" value="42_3">Kemungkinan besa2r ya</option>
                  <option data-id="4" value="42_4">Mungkin ya</option>
                  <option data-id="5" value="42_5">Tidak tahu</option>
                  <option data-id="6" value="42_6">Mungkin tidak</option>
                  <option data-id="7" value="42_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="42_8">Hampir pasti tidak</option>
                  <option data-id="9" value="42_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">43</td>
              <td class="opsi">G043</td>
              <td class="Gejala">Adanya rasa sakit dibagian yang terinfeksi</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="43_1">Pasti ya</option>
                  <option data-id="2" value="43_2">Hampir pasti ya</option>
                  <option data-id="3" value="43_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="43_4">Mungkin ya</option>
                  <option data-id="5" value="43_5">Tidak tahu</option>
                  <opti3n data-id="6" value="43_6">Mungkin tidak</option>
                  <opti3n data-id="7" value="43_7">Kemungkinan besar tidak</option>
                  <opti3n data-id="8" value="43_8">Hampir pasti tidak</option>
                  <opti3n data-id="9" value="43_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">44</td>
              <td class="opsi">G044</td>
              <td class="Gejala">Timbulnya kerak kulit berwarna kuning dengan rambut yang kusut</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="44_1">Pasti ya</option>
                  <option data-id="2" value="44_2">Hampir pasti ya</option>
                  <option data-id="3" value="44_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="44_4">Mungkin ya</option>
                  <option data-id="5" value="44_5">Tidak tahu</option>
                  <option data-id="6" value="44_6">Mungkin tidak</option>
                  <option data-id="7" value="44_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="44_8">Hampir pasti tidak</option>
                  <option data-id="9" value="44_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">45</td>
              <td class="opsi">G045</td>
              <td class="Gejala">Terdapat bentuk seboroik dikulit kepala</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="45_1">Pasti ya</option>
                  <option data-id="2" value="45_2">Hampir pasti ya</option>
                  <option data-id="3" value="45_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="45_4">Mungkin ya</option>
                  <option data-id="5" value="45_5">Tidak tahu</option>
                  <option data-id="6" value="45_6">Mungkin tidak</option>
                  <option data-id="7" value="45_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="45_8">Hampir pasti tidak</option>
                  <option data-id="9" value="45_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">46</td>
              <td class="opsi">G046</td>
              <td class="Gejala">Adanya peradangan diarea jenggot dan kumis</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="46_1">Pasti ya</option>
                  <option data-id="2" value="46_2">Hampir pasti ya</option>
                  <option data-id="3" value="46_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="46_4">Mungkin ya</option>
                  <option data-id="5" value="46_5">Tidak tahu</option>
                  <option data-id="6" value="46_6">Mungkin tidak</option>
                  <option data-id="7" value="46_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="46_8">Hampir pasti tidak</option>
                  <option data-id="9" value="46_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">47</td>
              <td class="opsi">G047</td>
              <td class="Gejala">Ruam kemerahan dengan bentuk melingkar seperti pulau</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                   <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="47_1">Pasti ya</option>
                  <option data-id="2" value="47_2">Hampir pasti ya</option>
                  <option data-id="3" value="47_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="47_4">Mungkin ya</option>
                  <option data-id="5" value="47_5">Tidak tahu</option>
                  <option data-id="6" value="47_6">Mungkin tidak</option>
                  <option data-id="7" value="47_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="47_8">Hampir pasti tidak</option>
                  <option data-id="9" value="47_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">48</td>
              <td class="opsi">G048</td>
              <td class="Gejala">Kulit terkelupas</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                  <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="48_1">Pasti ya</option>
                  <option data-id="2" value="48_2">Hampir pasti ya</option>
                  <option data-id="3" value="48_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="48_4">Mungkin ya</option>
                  <option data-id="5" value="48_5">Tidak tahu</option>
                  <option data-id="6" value="48_6">Mungkin tidak</option>
                  <option data-id="7" value="48_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="48_8">Hampir pasti tidak</option>
                  <option data-id="9" value="48_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">49</td>
              <td class="opsi">G049</td>
              <td class="Gejala">Terdapat benjolan yang berisi nanah (Abses)</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                  <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="49_1">Pasti ya</option>
                  <option data-id="2" value="49_2">Hampir pasti ya</option>
                  <option data-id="3" value="49_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="49_4">Mungkin ya</option>
                  <option data-id="5" value="49_5">Tidak tahu</option>
                  <option data-id="6" value="49_6">Mungkin tidak</option>
                  <option data-id="7" value="49_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="49_8">Hampir pasti tidak</option>
                  <option data-id="9" value="49_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">50</td>
              <td class="opsi">G050</td>
              <td class="Gejala">Terbentuknya lubang atau terowongan pada jaringan (Fistula)</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                  <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="50_1">Pasti ya</option>
                  <option data-id="2" value="50_2">Hampir pasti ya</option>
                  <option data-id="3" value="50_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="50_4">Mungkin ya</option>
                  <option data-id="5" value="50_5">Tidak tahu</option>
                  <option data-id="6" value="50_6">Mungkin tidak</option>
                  <option data-id="7" value="50_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="50_8">Hampir pasti tidak</option>
                  <option data-id="9" value="50_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="opsi">51</td>
              <td class="opsi">G051</td>
              <td class="Gejala">Terdapat bintik berwarna merah atau ungu dikulit</td>
              <td class="opsi">
                <select id="sl1" class="opsikondisi" name="kondisi[]" style="background-color:rgb(204, 102, 255);">
                  <option data-id="0" value="0">Pilih Jika Sesuai</option>
                  <option data-id="1" value="51_1">Pasti ya</option>
                  <option data-id="2" value="51_2">Hampir pasti ya</option>
                  <option data-id="3" value="51_3">Kemungkinan besar ya</option>
                  <option data-id="4" value="51_4">Mungkin ya</option>
                  <option data-id="5" value="51_5">Tidak tahu</option>
                  <option data-id="6" value="51_6">Mungkin tidak</option>
                  <option data-id="7" value="51_7">Kemungkinan besar tidak</option>
                  <option data-id="8" value="51_8">Hampir pasti tidak</option>
                  <option data-id="9" value="51_9">Pasti tidak</option>
                </select>
              </td>
            </tr>
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