<!DOCTYPE html>
<html lang="en">

<head>
  <title>
  <?php
            switch ($_GET['type']){
              case "family":echo"Family Rooms";break;
              case "suite":echo"Suite Rooms";break;
              case "ekonomi":echo"Ekonomi Rooms";break;
              case "single":echo"Single Rooms";break;
            }            
            ?>
  </title>
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
  <link rel="stylesheet" type="text/css" href="jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="https://codepen.io/fancyapps/pen/Kxdwjj">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
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
    <div class="slider-item" style="background-image: url('admin/code/foto_berita/<?=$dataGalery[9]?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-end">
          <div class="col-md-10 col-sm-12 ftco-animate mb-4">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> 
            <?php
            switch ($_GET['type']){
              case "family":echo"<span>Family Rooms</span>";break;
              case "suite":echo"<span>Suite Rooms</span>";break;
              case "ekonomi":echo"<span>Ekonomi Rooms</span>";break;
              case "single":echo"<span>Single Rooms</span>";break;
            }            
            ?>
          </p>
          <?php
            switch ($_GET['type']){
              case "family":echo"<h1 class=\"mb-3\">Family Rooms</h1>";break;
              case "suite":echo"<h1 class=\"mb-3\">Suite Rooms</h1>";break;
              case "ekonomi":echo"<h1 class=\"mb-3\">Ekonomi Rooms</h1>";break;
              case "single":echo"<h1 class=\"mb-3\">Single Rooms</h1>";break;
            }            
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section room-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Kamar</span>
           <?php
            switch ($_GET['type']){
              case "family":echo"<h2>Family Rooms</h2>";break;
              case "suite":echo"<h2>Suite Rooms</h2>";break;
              case "ekonomi":echo"<h2>Ekonomi Rooms</h2>";break;
              case "single":echo"<h2>Single Rooms</h2>";break;
            }            
            ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <?php
            switch ($_GET['type']){
              case "family": 
              $query=$conn->query("SELECT * FROM paket where name='Family Room'");
              $data=$query->fetch();
              break;
              case "suite": 
              $query=$conn->query("SELECT * FROM paket where name='Suite Room'");
              $data=$query->fetch();
              break;
              case "ekonomi": 
              $query=$conn->query("SELECT * FROM paket where name='Ekonomi Room'");
              $data=$query->fetch();
              break;
              case "single": 
              $query=$conn->query("SELECT * FROM paket where name='Single Room'");
              $data=$query->fetch();
              break;
            }
                        
            ?>
            <div class="item">
              <div class="room-wrap">
                <div class="text p-4">
                  <div class="d-flex mb-1">
                    <div class="one-third">
                      <h3><a href="#"><?php echo $data['name']?></a></h3>
                    </div>
                    <div class="one-forth text-center">
                    <p class="price" style="font-size:15px">Rp.<?php echo $data['price']?> <br><span>/malam</span></p>
                      <p class="price" style="font-size:15px">Rp.<?php echo $data['weekprice']?> <br><span>/minggu</span></p>
                      <p class="price" style="font-size:15px">Rp.<?php echo $data['monprice']?> <br><span>/bulan</span></p>
                    </div>
                  </div>
                  <p class="features">
                    <?php
                    $fasArray = explode(',', $data['fasilities']);
                    foreach($fasArray as $item){
                      ?>
                      <span class="d-block mb-2"><i class="icon-check mr-2"></i> <?= $item?></span>
                      <?php
                    }
                    ?>
                  </p>
                  <p><a 
                  href="https://api.whatsapp.com/send?phone=6281265499627&text=Hai%2C%20Saya%20ingin%20memesan%20*<?=$data['name']?>*%0DNama:%0DTanggal%20Check-in:%0DTanggal%20Check-out:%20CNo HP:" 
                  target="_blank" class="btn btn-primary">Pesan Kamar</a></p>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <?php
            switch ($_GET['type']){
              case "family": 
              $queryFoto=$conn->query("SELECT * FROM image where paket_id=$data[id]");
              break;
              case "suite": 
              $queryFoto=$conn->query("SELECT * FROM image where paket_id=$data[id]");
              break;
              case "ekonomi": 
              $queryFoto=$conn->query("SELECT * FROM image where paket_id=$data[id]");
              break;
              case "single": 
              $queryFoto=$conn->query("SELECT * FROM image where paket_id=$data[id]");
              break;
            }
            while ($dataFoto = $queryFoto->fetch()) {
              echo "
                <div class=\"col-md-6 ftco-animate\">
                  <div class=\"room-wrap\">
                    <a href=\"admin/code/foto_berita/$dataFoto[image]\" class=\"room-img\" data-fancybox=\"gallery\"  style=\"background-image: url(admin/code/foto_berita/$dataFoto[image]);\">
                    </a>
                  </div>
                </div>
              ";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

    <?php require_once("components/footer.php")?>
  


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>

	<script src="jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- <script src="js/jquery.min.js"></script> -->
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>