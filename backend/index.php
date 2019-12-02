<!DOCTYPE html>
<html lang="en">
<?php 
    date_default_timezone_set("Asia/Bangkok"); 
    date_default_timezone_get()
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | UBG Check your Away</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/modernizr-2.8.3.min.js"></script>
    <style>
        .forh1 {
            color: wheat;
            text-align: center;
        }

        .forh2 {
            color: rgb(255, 84, 16);
            text-align: center;
        }

        .img {
            padding-top: 60px;
            text-align: center;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div>
            <div class="img">
                <img src="img/logo putih.png" width="100" alt="" srcset="">
            </div>
            <h2 class="forh1">UNLOCK</h2>
            <h3 class="forh2">UBG Check Your Away</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="hpanel">
                    <div class="panel-body text-center lock-inner">
                        <br />
                        <h4><span class="text-success"><?= date('H:i:s ');?></span><strong><?php echo date('l, F d, Y');?></strong></h4>
                        <p>Your are in lock screen. Main app was shut down and you need to enter your passwor to go back
                            to app.</p>
                        <form action="proses/login_proses.php" class="m-t" method="POST">
                            <div class="form-group">
                                <input type="hidden" required="" name="user" value="medicare">
                                <input type="password" required="" name="pass" placeholder="******" class="form-control">
                            </div>
                            <button class="btn btn-primary block full-width" type="submit">Unlock</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>

</body>

</html>