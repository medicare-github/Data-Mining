<!DOCTYPE html>
<html lang="zxx">
<?php
include 'includes/_head.php';
// include 'proses/proses.php';
?>

<body>
    <!-- Page Preloder -->
    <?php
    include 'includes/_loader.php'
    ?>

    <!-- Header section -->
    <?php
    include 'includes/_header.php';
    ?>
    <!-- Header section end -->
    <section class="how-section spad set-bg" data-setbg="img/how-to-bg.jpg">
        <div class="container text-white">

            <div class="row">
                <div class="col-md-5">
                    <div class="hs-text">
                        <h2><span>Enter </span> your data.</h2>
                        <p>Masukan data <span class="text-warning">Ujian nasional</span> yang sesuia dengan <span class="text-warning">Ijzah!</span> <span class="text-danger">Okee</span></p>
                        <form class="contact-from" action="proses/proses.php" method="GET">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Matematika" name="mtk">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Fisika" name="fsk">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Kimia" name="kma">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Biologi" name="bgi">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Bahasa Indonesia" name="bi">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Bahasa Inggris" name="bing">
                                </div>
                            </div>
                            <button type="submit" class="site-btn btn-block">Go! Check</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                    <img src="" height="200" alt="" srcset="">
                </div>
                <div class="col-md-5 mt-5 float-right">
                    <div class="hs-text">
                        <h4>Recomendation For You</h4>
                        <p>
                            <?php
                                
                            $a = $temp[1];

                            if ($a == null) {
                                echo "";
                            } else {
                                echo "<span class='text-warning'>$a Pilihan yang di rekomendasikan berdasarkan Nilai Ujian nasional anda</span>";
                            }
                            ?>
                        </p>
                        <div class="mb-3">
                            <img src="images/result.png" height="200" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section -->
    <?php
    include 'includes/_footer.php'
    ?>
    <!-- Footer section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>