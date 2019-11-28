<!DOCTYPE html>
<html lang="en">
<?php include '../includes/_head.php' ?>


<body>
    <?php include '../includes/_loader.php' ?>

    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item">
                <div class="container text-center">
                    <a href="pages/generalMIPA-highschoolPro.php" class="site-btn">DATA SET SMA MIPA</a>
                    <a href="pages/Major-highschoolPro.php" class="site-btn sb-c2">DATA SET SMA SOS</a>
                    <a href="pages/Major-highschoolPro.php" class="site-btn ">DATA SET SMK</a>
                    <div class="container">
                        <table class="table table-striped text-white" id="#myTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="" class="fa fa-pencil text-warning"></a>
                                        <a href="" class="fa fa-trash-o text-danger"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>
                                        <a href="" class="fa fa-pencil text-warning"></a>
                                        <a href="" class="fa fa-trash-o text-danger"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>
                                        <a href="" class="fa fa-pencil text-warning"></a>
                                        <a href="" class="fa fa-trash-o text-danger"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="col-lg-12">
                        <div class="player-box">
                            
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>




    <?php include '../includes/_scriptjs.php' ?>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>