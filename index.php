<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Benyamin Hotel</title>
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
      <div class="slider-item" style="background-image: url('admin/code/foto_berita/9308998IMG20191021133452.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4" style="text-shadow: 2px 2px black;">Selamat Datang Di Benyamin Hotel</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('admin/code/foto_berita/6347901IMG20191021133845.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4" style="text-shadow: 2px 2px black;">Hotel Murah Di Kota Padang</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('admin/code/foto_berita/5746926IMG20191021133803.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4" style="text-shadow: 2px 2px black;">Pesan Kamar Sekarang</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item" style="background-image: url('admin/code/foto_berita/620099110.jpeg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4" style="text-shadow: 2px 2px black;">Hotel Ini Dijual</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="services bg-light">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap aside-stretch">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-bed"></span> Banyak Fariasi Room</a>
              <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab" aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3">Rp.</span> Harga Murah</a>
              <a class="nav-link px-4" id="v-pills-wifi-tab" data-toggle="pill" href="#v-pills-wifi" role="tab" aria-controls="v-pills-wifi" aria-selected="false"><span class="mr-3 flaticon-wifi-router"></span> Free wifi</a>
            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                <span class="icon mb-3 d-block flaticon-bed"></span>
                <h2 class="mb-4">Banyak Variasi Ruangan</h2>
                <p class="lead">Di Benyamin Hotel Memiliki Banyak Variasi Ruangan. Setidaknya Kami Menyediakan 4 Variasi Ruangan, Yaitu : Family Room, Suite Room, Ekonomi Room, dan Single Room</p>
              </div>

              <div class="tab-pane fade" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                <span class="icon mb-3 d-block flaticon-tray"></span>
                <h2 class="mb-4">Harga Yang Terjangkau</h2>
                <p class="lead">Di Hotel Benyamin, Kami Memiliki Harga Yang Sangat Terjangkau, Bahkan Termurah Di Kota Padang. Harga Di Hotel Kami Harga Yang Ditawarkan Sekelas Kos-Kosan Namun vasilitas Sekelas Hotel Berbintang</p>
              </div>

              <div class="tab-pane fade" id="v-pills-wifi" role="tabpanel" aria-labelledby="v-pills-wifi-tab">
                <span class="icon mb-3 d-block flaticon-wifi-router"></span>
                <h2 class="mb-4">Free Wifi </h2>
                <p class="lead">Di Hotel Benyamin Menyediakan Wifi Gratis Akses 24 Jam Tanpa Batasan</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section room-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Jenis</span>
            <h2>Jenis Kamar</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ftco-animate">
           <div class="carousel-room owl-carousel">
             <?php
             $query= $conn->query("SELECT * FROM paket");
            while ($datakamar = $query->fetch()) { 
              $queryFoto=$conn->query("SELECT * FROM image WHERE paket_id=$datakamar[id] limit 1");
              $dataFoto=$queryFoto->fetch();
              switch ($datakamar['name']){
              case "Family Room": 
              $type='family';
              break;
              case "Suite Room": 
              $type='suite';
              break;
              case "Ekonomi Room": 
              $type='ekonomi';
              break;
              case "Single Room": 
              $type='single';
              break;
            }
              ?>
            <div class="item">
              <div class="room-wrap">
                <a href="room.php?type=<?=$type?>" class="room-img" style="background-image: url(admin/code/foto_berita/<?=$dataFoto['image']?>);"></a>
                <div class="text p-4">
                  <div class="d-flex mb-1">
                    <div class="one-third">
                      <h3><a href="room.php?type=<?=$type?>"><?php echo $datakamar['name']?></a></h3>
                    </div>
                    <div class="one-forth text-center">
                      <p class="price" style="font-size:15px">Rp.<?php echo $datakamar['price']?> <br><span>/malam</span></p>
                      <p class="price" style="font-size:15px">Rp.<?php echo $datakamar['weekprice']?> <br><span>/minggu</span></p>
                      <p class="price" style="font-size:15px">Rp.<?php echo $datakamar['monprice']?> <br><span>/bulan</span></p>
                    </div>
                  </div>
                  <p class="features">
                    <?php
                    $fasArray = explode(',', $datakamar['fasilities']);
                    foreach($fasArray as $item){
                      ?>
                      <span class="d-block mb-2"><i class="icon-check mr-2"></i> <?= $item?></span>
                      <?php
                    }
                    ?>
                  </p>
                  <p><a 
                  href="https://api.whatsapp.com/send?phone=6281265499627&text=Hai%2C%20Saya%20ingin%20memesan%20*<?=$datakamar['name']?>*%0DNama:%0DTanggal%20Check-in:%0DTanggal%20Check-out:%20CNo HP:" 
                  target="_blank" class="btn btn-primary">Pesan Kamar</a></p>
                </div>
              </div>
            </div>

              <?php
            }
             ?>
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