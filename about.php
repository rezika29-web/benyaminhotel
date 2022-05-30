<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tentang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require_once("admin/code/koneksi.php")?>
    
        <?php require_once("components/nav.php")?>  
    <!-- END nav -->
    <?php
    $queryGalery=$conn->query("SELECT * FROM galery");
    while($item = $queryGalery->fetch()){
      $dataGalery[] = $item['image'];
    }
    // var_dump($dataGalery);
    ?>
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('admin/code/foto_berita/<?=$dataGalery[1]?>');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Tentang</span></p>
              <h1 class="mb-3">Tentang</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-2">
      <div class="container d-flex">
        <div class="section-2-blocks-wrapper row d-flex">
          <!-- <div class="img col-sm-12 col-lg-6 order-last" style="background-image: url(?'admin/code/foto_berita/<?=$dataGalery[9]?>');">
          </div> -->
          <div class="text col-lg-12 order-first ftco-animate">
            <div class="text-inner align-self-start">
              <span class="subheading">About Hotel</span>
              <h3 class="heading">Peraturan Hotel</h3>
              <p>1. Serahkan KTP/SIM/PASSPORT Saat Check In Untuk Registrasi</p>
              <p>2. <b>Surat Nikah Bila Berpasangan</b></p>
              <p>3. <b>Pembayaran Tunai Saat Check In</b></p>
              <p>4. Deposit Bila Lebih Dari Satu Hari</p>
              <p>5. Check In Jam 05:00 Pagi Dihitung Penuh Semalam</p>
              <p>6. Batas Check Out Jam 01.00 Siang</p>
              <p>&emsp; Over Time : 2 Jam Pertama Kena Biaya Tambahan 25%</p>
              <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;  2 Jam Berikutnya 50%</p>
              <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;  Jam Selanjutnya 100%</p>
              <p>7. Bila Perpanjang Informasikan Pada Receptionist Sebelum Jam 01.00 Siang</p>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require_once("components/footer.php")?>     
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>