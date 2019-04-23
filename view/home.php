<?php include_once "../functions/clock.php";
setlocale(LC_ALL, 'fr_FR');
$date = strftime("%A %e %B");
$heureH = date("H");
$heureM = date("i");
$heure = $heureH."h".$heureM
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../public/css/general.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <?php printHour($heure); ?>
        </div>
        <div class="col-sm-5">
            <?php printDate($date); ?>
        </div>
        <div class="col-sm-4">
            <div id="cont_NzcxMTF8MXwyfDJ8MXxGRkZGRkZ8MXxGRkZGRkZ8Y3wx"><div id="spa_NzcxMTF8MXwyfDJ8MXxGRkZGRkZ8MXxGRkZGRkZ8Y3wx"><a id="a_NzcxMTF8MXwyfDJ8MXxGRkZGRkZ8MXxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/chessy_v77111/" target="_blank" style="color:#333;text-decoration:none;">Météo Chessy</a> ©<a href="http://www.meteocity.com">meteocity.com</a></div><script type="text/javascript" src="http://widget.meteocity.com/js/NzcxMTF8MXwyfDJ8MXxGRkZGRkZ8MXxGRkZGRkZ8Y3wx"></script></div>
        </div>
    </div>
</div>
<script src="../public/bootstrap/js/bootstrap.min.js"></script>
<script src="../public/fontawesome/js/all.min.js"></script>
</body>
</html>