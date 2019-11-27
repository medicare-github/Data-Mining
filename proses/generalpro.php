<?php
include '../connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>proses</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
</head>

<body>

    <table class="table-bordered">
        <thead>
            <tr>
                <th scope="col">nama</th>
                <th scope="col">nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM general_highsc";
                $result = mysqli_query($con, $query);
                while ($data = mysqli_fetch_object($result)) :
            ?>
                <tr>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->matematika?></td>

                </tr>
            <?php
                endwhile;
            ?>

        </tbody>
    </table>



</body>

</html>