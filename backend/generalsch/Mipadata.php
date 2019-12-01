<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Nalika - Material Admin Template</title>
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
    
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../css/main.css">
   
    <link rel="stylesheet" href="../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../css/metisMenu/metisMenu-vertical.css">
   
    <link rel="stylesheet" href="../style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- sidebar -->
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
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>List Data Set SMA <span style="color: orange;">MIPA</span></h2>
                                                <p>Welcome to SRP <span class="bread-ntd">anakbayan code</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">

                                            <form action="../proses/upload_act.php" method="post" enctype="multipart/form-data">
                                                <label title="Upload file" for="inputImage" class="btn btn-success img-cropper-cp">
                                                    <input type="file" accept=".xlsx" name="file" id="inputImage" class="hide"> Upload file.xlsx
                                                </label>
                                                <button data-toggle="tooltip" type="submit" data-placement="left" title="" class="btn" data-original-title="Goo! Upload"><i class="icon nalika-upload"></i></button>
                                            </form>
                                        </div>
                                        <div class="breadcomb-report">
                                                <a href="" >
                                                    <button class="btn btn-danger img-cropper-cp" >Download Data.pdf</button>
                                                </a>
                                                <a href="">
                                                    <button data-toggle="tooltip" data-placement="left" title="" class="btn" data-original-title="Download Data (.pdf)"><i class="icon nalika-download"></i></button>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4 style="color: orange;">MIPA DATA</h4>
                            <div class="add-product">
                                <a href="MipaInput.php">Add data</a>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Matematika</th>
                                        <th>Fisika</th>
                                        <th>Kimia</th>
                                        <th>Biologi</th>
                                        <th>Bahasa indonesia</th>
                                        <th>Bahasa inggris</th>
                                        <th>Jurusan</th>
                                        <th>Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../connection/connection.php';
                                    $query = "SELECT * FROM general_highsc";
                                    $result = mysqli_query($con, $query);
                                    $no = 0;
                                    while ($data = mysqli_fetch_object($result)) :
                                        $no += 1;
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $data->nama ?></td>
                                            <td><?= $data->matematika ?></td>
                                            <td><?= $data->fisika ?></td>
                                            <td><?= $data->kimia ?></td>
                                            <td><?= $data->biologi ?></td>
                                            <td><?= $data->bahasa_indo ?></td>
                                            <td><?= $data->bahasa_ing ?></td>
                                            <td><?= $data->jurusan ?></td>
                                            <td>
                                                <a href="MipaEdit.php?kode=<?= $data->id ?>" style="color: white;">
                                                    <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                </a>
                                                <a href="MipaDelete.php?kode=<?= $data->id ?>" onclick="return confirm('Yakin untuk menghapus?')" style="color: white;">
                                                    <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    endwhile;
                                    ?>

                                </tbody>
                            </table>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../includes/_footer.php' ?>


    </div>
    <!-- jquery
		============================================ -->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../js/bootstrap.min.js"></script>
   
    <script src="../js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../js/jquery.meanmenu.js"></script>
   
    <script src="../js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../js/main.js"></script>
</body>

</html>