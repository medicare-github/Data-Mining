<!DOCTYPE html>
<html lang="zxx">
<?php
include '../includes/_head.php';
include '../proses/majorProses.php';
?>

<body>
    <!-- Page Preloder -->
    <?php
    include '../includes/_loader.php'
    ?>

    <!-- Header section -->
    <?php
    include '../includes/_header.php';
    ?>
    <!-- Header section end -->
    <section class="how-section spad set-bg" data-setbg="img/how-to-bg.jpg">
        <div class="container">
            <div class="category-links text-left">
                <a href="Major-highschoolPro.php"class="active">For SMK</a>
                <a href="generalMIPA-highschoolPro.php"> <span class="text-danger">Anda SMA ? | </span> <span class="text-warning">Klik link!</span> </a>
            </div>
        </div>
        <div class="container text-white">
            <div class="row">
                <div class="col-md-5">
                    <div class="hs-text">
                        <h1 class="text-danger">SMK</h1>
                        <h2><span>Enter </span> your data.</h2>
                        <p>Masukan data <span class="text-warning">Ujian nasional</span> yang sesuia dengan <span class="text-warning">Ijzah!</span> <span class="text-danger">Okee</span></p>
                        <form class="contact-from" action="Major-highschoolPro.php" method="GET">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Matematika" name="mtk" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Bahasa Indonesia" name="bi" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Bahasa Inggris" name="bing" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Kejuruan" name="kjr" required>
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
                            $a = $ab;
                            if ($a == null) {
                                echo "Hasil Belum di Temukan, Kerena Belum Melakukan proses pemasukan data Ujian Nasional!";
                            } else {
                                ?>
                                <h6 class="text-warning"><?php print_r(bubble_sort($temp)); ?></h6> Merupakan Rekomendasi jurusan berdasarkan nilai Unjian nasional anda


                            <?php

                            }
                            ?>
                        </p>
                        <div class="mb-3">
                            <img src="../images/result.png" height="200" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section -->
    <?php
    include '../includes/_footer.php'
    ?>
    <!-- Footer section end -->

    <!--====== Javascripts & Jquery ======-->
    <?php
    include '../includes/_scriptjs.php'
    ?>

</body>

</html>