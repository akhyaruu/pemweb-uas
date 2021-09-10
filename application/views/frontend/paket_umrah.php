<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900" />
   <!-- <link rel="stylesheet" href="fonts/icomoon/style.css" /> -->
   <link rel="stylesheet" href="<?= base_url('assets/frontend/css/bootstrap.min.css')?>" />
   <!-- <link rel="stylesheet" href="css/magnific-popup.css" /> -->
   <link rel="stylesheet" href="<?= base_url('assets/frontend/css/magnific-popup.css')?>" />
   <!-- <link rel="stylesheet" href="css/jquery-ui.css" /> -->
   <link rel="stylesheet" href="<?= base_url('assets/frontend/css/jquery-ui.css')?>" />
   <!-- <link rel="stylesheet" href="css/owl.carousel.min.css" /> -->
   <link rel="stylesheet" href="<?= base_url('assets/frontend/css/owl.carousel.min.css')?>" />
   <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css" /> -->
   <link rel="stylesheet" href="<?= base_url('assets/frontend/css/owl.theme.default.min.css')?>" />
   <!-- <link rel="stylesheet" href="css/bootstrap-datepicker.css" /> -->
   <link rel="shortcut icon" href="images/Logo1.png" />

   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

   <!-- <link rel="stylesheet" href="css/aos.css" /> -->
   <link rel="stylesheet" href="<?= base_url('assets/frontend/css/aos.css')?>" />
   <!-- <link rel="stylesheet" href="css/jquery.fancybox.min.css" /> -->
   <link rel="stylesheet" href="<?= base_url('assets/frontend/css/jquery.fancybox.min.css')?>" />

   <!-- <link rel="stylesheet" href="css/style.css" /> -->
   <link rel="stylesheet" href="<?= base_url('assets/frontend/css/style.css')?>" />
   <title>Paket Umrah</title>
</head>

<body>
   <!-- <div class="site-wrap">
      <div class="site-navbar site-navbar-target js-sticky-header">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-2">
                  <h1 class="my-0 site-logo">
                     <a href="index.html">Haromain</a>
                  </h1>
               </div>
               <div class="col-10">
                  <nav class="site-navigation text-right" role="navigation">
                     <div class="container">
                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                           <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                 class="icon-menu h3"></span></a>
                        </div>

                        <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                           <li>
                              <a href="#home-section" class="nav-link">Beranda</a>
                           </li>
                           <li class="has-children">
                              <a href="#about-section" class="nav-link">Review</a>
                              <ul class="dropdown arrow-top">
                                 <li>
                                    <a href="#our-team-section" class="nav-link">Hotel</a>
                                 </li>
                                 <li>
                                    <a href="#pricing-section" class="nav-link">Katering</a>
                                 </li>
                                 <li>
                                    <a href="#faq-section" class="nav-link">Maskapai</a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="paketumrah.html" class="nav-link">Paket Umroh</a>
                           </li>
                           <li>
                              <a href="#news-section" class="nav-link">Berita</a>
                           </li>
                           <li>
                              <a href="" class="nav-link" data-toggle="modal" data-target="#modalLogin">Login</a>
                           </li>
                           <li>
                              <a href="" class="nav-link" data-toggle="modal" data-target="#modalRegister">Register</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div> -->

   <!-- <div class="site-blocks-cover overlay" style="background-image: url(<?= base_url('assets/frontend/images/maskapai.jpg')?>);" data-aos="fade"
      data-stellar-background-ratio="0.5" id="home-section">
      <div class="container">
         <div class="row align-items-center text-center justify-content-center">
            <div class="col-md-8">
               <h1 class="text-uppercase">Paket Umrah</h1>
            </div>
         </div>
      </div>
   </div> -->
   <div class="container">
      <h3 class="text-center mt-4">Cari Paket</h3>
      <div class="row mx-auto justify-content-center mt-3 mb-5 pt-4" style="height: 40px;">
         <select class="mr-3" id="idKeberangkatan" style="width: 180px;">
            <option>Bulan Keberangkatan</option>
            <option value="januari">Januari</option>
            <option value="februari">Februari</option>
            <option value="maret">Maret</option>
            <option value="april">April</option>
            <option value="mei">Mei</option>
            <option value="juni">Juni</option>
            <option value="juli">Juli</option>
            <option value="agustus">Agustus</option>
            <option value="september">September</option>
            <option value="oktober">Oktober</option>
            <option value="november">November</option>
            <option value="desember">Desember</option>
         </select>
         <select class="mr-3" id="idBiayaPaket" style="width: 150px;">
            <option value="">Biaya Paket</option>
            <option value="20000000">< Rp20Jt</option>
            <option value="">Rp20Jt - Rp25Jt</option>
            <option value="">Rp25Jt - Rp30Jt</option>
            <option value="">> Rp30Jt</option>
         </select>
         <button class="btn-primary">Cari Paket</button>
      </div>
      <hr>
      <input type="text" name="" id="idCari">
      <h3 class="text-center mt-5">Semua Paket Umrah</h3>
      <div class="row mt-4 mb-4 ml-4 justify-content-center" id="pembungkus">

         <!-- <div class="col-md-4 mt-4">
            <div class="card shadow" style="width: 18rem;">
               <img src="<?= base_url('assets/frontend/images/maskapai.jpg')?>" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title"><?= $pu->NAMA_PAKET_UMROH ?></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                     card's content.</p>
                  <a href="infopaket.html" class="btn btn-primary">Lihat Info</a>
               </div>
            </div>
         </div> -->

         
         








      </div>


   </div>
   </div>




   
   <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
   <script src="<?= base_url('assets/frontend/js/jquery-3.3.1.min.js')?>"></script>
   <script>
      $("#idKeberangkatan").change(function(){
         const nilai = idKeberangkatan.value
         $.ajax({
            url:"<?= base_url('page/ajaxRequestPost')?>",
            method: 'post',
            data: {"nilai": nilai},
            dataType: 'json',
            success: function(response){
               console.log(response)
            }
         })
      });

      $("#idCari").keyup(function(){
         let output;
         const pembungkus = document.getElementById('pembungkus');
         const nilai = idCari.value
         $.ajax({
            url:"<?= base_url('page/dapatkanData')?>",
            method: 'post',
            data: {"nilai": nilai},
            dataType: 'json',
            success: function(response){
               response.map(data => {
                  output += `
                  <div class="col-md-4 mt-4"> 
                     <div class="card" style="width: 18rem;">
                        <img src="" class="card-img-top" alt="...">
                           <div class="card-body">
                              <h5 class="card-title">${data.NAMA_PAKET_UMROH}</h5>
                              <p class="card-text">${data.HARGA_PAKET_UMROH}</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                           </div>
                     </div>
                  </div>`
               });
               pembungkus.innerHTML = output;
            }
         })
      });
   </script>

   <!-- <script src="js/jquery-ui.js"></script> -->
   <script src="<?= base_url('assets/frontend/js/jquery-ui.js')?>"></script>
   <!-- <script src="js/popper.min.js"></script> -->
   <script src="<?= base_url('assets/frontend/js/bootstrap.min.js')?>"></script>
   <!-- <script src="js/owl.carousel.min.js"></script> -->
   <!-- <script src="js/jquery.countdown.min.js"></script> -->
   <!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
   <script src="<?= base_url('assets/frontend/js/jquery.magnific-popup.min.js')?>"></script>
   <!-- <script src="js/bootstrap-datepicker.min.js"></script> -->
   <!-- <script src="js/aos.js"></script> -->
   <script src="<?= base_url('assets/frontend/js/aos.js')?>"></script>
   <!-- <script src="js/jquery.sticky.js"></script> -->
   <script src="<?= base_url('assets/frontend/js/jquery.sticky.js')?>"></script>
   <!-- <script src="js/jquery.easing.1.3.js"></script> -->
   <script src="<?= base_url('assets/frontend/js/jquery.easing.1.3.js')?>"></script>

   <!-- <script src="js/jquery.fancybox.min.js"></script> -->
   <script src="<?= base_url('assets/frontend/js/jquery.fancybox.min.js')?>"></script>
   <script src="<?= base_url('assets/frontend/js/main.js')?>"></script>


   
</body>

</html>