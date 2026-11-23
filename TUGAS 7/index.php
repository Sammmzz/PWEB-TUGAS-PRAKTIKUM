<?php 
require_once "Kucing.php";
require_once "Anjing.php";

$kucing = new Kucing();
$kucing->setNama("Miskaa");
$kucing->setUmur(3);

$anjing = new Anjing();
$anjing->setNama("Levo");
$anjing->setUmur(4);


$listHewan = [$kucing, $anjing];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas pertemuan 7</title>
</head>
<body>
    <h2>Data Hewan</h2>
    <?php foreach($listHewan as $hewan){ ?>
        <h3>Nama : <?php echo $hewan->getNama(); ?></h3>
        <h3>Umur : <?php echo $hewan->getUmur(); ?></h3>
        <h3>Suara : <?php echo $hewan->getSuara(); ?></h3>
    <?php } ?>
    </body>
</html>

