<?php
//pertemuan 2 php dasar
// sintaks php

//standar output
//echo, print
//print_r
//var_dump
// penulisan sintaks php
//1. php dalam html
//2. html dalam php

//variable dan tipe data
//variabel
//tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = 'putri legiani fahreza';

//operator
//aritmatika
//+ - * / %
echo 1 + 1;
$x = 10; 
$y = 20;
echo $x * $y;
echo '<hr>';

//concat
//.
$nama_depan = "putri";
$nama_belakang = "legiani";
echo $nama_depan . " " . $nama_belakang;
echo '<hr>';

//assigment 
//=, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;
echo '<hr>';

//perbandingan
//<, >, <=, >=, ==, !=
var_dump(1>5);
echo '<hr>';

//identitas
//=== , !==
var_dump(1 === "1");
echo '<hr>';

//logika
//&&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
echo '<hr>';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <tittle>belajar PHP</tittle>
    </head>
    <body>
        <h1>Selamat datang , <?php echo $nama; ?></h1>
    </body>
</html>