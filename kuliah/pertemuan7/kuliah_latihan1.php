<?php 
//SUPERGLOBALS
//Variabel bawaan PHP yang bisa diakses dimanapun
//Bentuknya array associatif
//$_GET
//$_POSY
//$_SERVER
$_GET = ["nama" => "legi", "email" => "putrilegiani234@gmail.com"];
var_dump($_GET);
// var_dump($_GET);




?>
<!-- <h1>Halo, <?= $_GET["nama"]; ?> </h1> -->

<h1>Halo, <?= $_GET["nama"]; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Legi">Legi</a>
    </li>
    <li>
        <a href="kuliah_latihan1.php?nama=Najwa">Najwa</a>
    </li>
    <li>
        <a href="kuliah_latihan1.php?nama=Gloria">Gloria</a>
    </li>
</ul>