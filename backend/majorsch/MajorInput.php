<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UBG | Check your away</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <!-- nalika Icon CSS
		============================================ -->
  <link rel="stylesheet" href="../css/nalika-icon.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="../css/owl.carousel.css">
  <link rel="stylesheet" href="../css/owl.theme.css">
  <link rel="stylesheet" href="../css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="../css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="../css/normalize.css">
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="../css/meanmenu.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="../css/main.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="../css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="../css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../css/calendar/fullcalendar.print.min.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="../style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="../css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <?php include '../includes/_sidebar.php' ?>
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="index.html"><img class="main-logo" src="../img/logo/logo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-advance-area">
      <?php include '../includes/_headerTop.php' ?>
      <!-- Mobile Menu start -->
      <?php include '../includes/mobileMenu.php' ?>
      <!-- Mobile Menu end -->
    </div>

    <div class="single-product-tab-area mg-b-30" style="margin-top: 30px;">
      <!-- Single pro tab review Start-->
      <div class="single-pro-review-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="review-tab-pro-inner">
                <ul id="myTab3" class="tab-review-design">
                  <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Enter Nilai Ujian Nasional <i style="color: orange;font-style: normal;">SMK</i> </a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                  <div class="product-tab-list tab-pane fade active in" id="description">
                    <form action="../proses/prosesMajor.php" method="post">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                              <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="nama" placeholder="Nama lengkap" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                              <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="mtk" placeholder="Matematika" required>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                              <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="kjr" placeholder="Kejuruan">
                            </div>

                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                              <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="bi" placeholder="Bahasa Indonesia" required>
                            </div>
                            <div class="input-group mg-b-pro-edt">
                              <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="bing" placeholder="Bahasa Inggris" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="review-content-section">
                            <div class="input-group mg-b-pro-edt">
                              <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                              <!-- <input type="text" class="form-control" name="jrsn" placeholder="Jurusan" required> -->
                              <select name="jrsn" class="form-control" id="">
                                <option value="S1 Ilmu Komputer">S1 Ilmu Komputer</option>
                                <option value="S1 Desain Komunikasi Visual">S1 Desain Komunikasi Visual</option>
                                <option value="D3 Rekayasa Perangkat Lunak">D3 Rekayasa Perangkat Lunak</option>
                                <option value="S1 Gizi">S1 Gizi</option>
                                <option value="S1 Hukum">S1 Hukum</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="text-center custom-pro-edt-ds">
                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                            </button>
                            <button type="reset" class="btn btn-ctl-bt waves-effect waves-light">Discard
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>
  <!-- jquery
		============================================ -->
  <script src="../js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="../js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="../js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="../js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="../js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="../js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="../js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="../js/metisMenu/metisMenu.min.js"></script>
  <script src="../js/metisMenu/metisMenu-active.js"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="../js/sparkline/jquery.sparkline.min.js"></script>
  <script src="../js/sparkline/jquery.charts-sparkline.js"></script>
  <!-- calendar JS
		============================================ -->
  <script src="../js/calendar/moment.min.js"></script>
  <script src="../js/calendar/fullcalendar.min.js"></script>
  <script src="../js/calendar/fullcalendar-active.js"></script>
  <!-- float JS
		============================================ -->
  <script src="../js/flot/jquery.flot.js"></script>
  <script src="../js/flot/jquery.flot.resize.js"></script>
  <script src="../js/flot/curvedLines.js"></script>
  <script src="../js/flot/flot-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="../js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="../js/main.js"></script>
</body>

</html>