<?php

//pertemuan 2, belajar sintaks php
//NILAI
//angka (integer), tulisan (string), true/false(boolean)
echo 10; //integer
echo '<br>';
echo 'putri'; //string
echo '<br>';
echo false; //boolean null
echo '<hr>';

//VARIABLE
//TEMPAT MENAMPUNG NILAI
//AWALI DENGAN TANDA $, NAMA NYA BEBAS
//tidak boleh mengandung angka, tidak boleh diawali angka
//tidak boleh ada spasi, diganti dengan underscore
$nama = 'putri';
echo $nama;
echo '<hr>';

//string
//'',"
$hari = 'sabtu';
echo $hari;
echo "<br>";
echo 'putri: "hallo, semua!"';
echo "<br>";
//escape character
//\
echo 'putri : "selamat hari jum\'at"';
echo "<br>";
echo "putri : \"selamat hari jum'at\"";
echo '<br>';
//interpolasi
//mencetak langsung isi variabel
//hanya bisa oleh ""
echo "hallo, nama saya $nama";
echo '<br>';
echo 'hallo, nama saya $nama';
echo '<hr>';

//concat/ penggabung string
// .
$nama_depan = 'putri';
$nama_belakang = 'legiani';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'putri: "selamat ' . "hari jum'at\"";
echo '<hr>';
//operator
//aritmatika
//+,-,*,/,% (modulo /modulus /sisa bagi)
echo 1 +1;
echo '<br>';
echo 'hasil dari 1+1 adalah' . " " . 1+1;
echo '<br>';
echo 1+2*3-4; //KaBaTaKu
echo '<br>';
echo 10 % 5;
echo '<br>';
echo 1 + '1' + 1;
echo '<hr>';

//perbandingan
//<,>,<=,>=,==,!=
echo 1 < 5;
echo '<br>';
echo 1 == 1;
echo '<hr>';

//identitas/strict comparison
// ===, !==
echo 1 === "1";

//increament / decrement
//tambah/kurang 1
//++, --
$x = 10;
echo ++$sx;
echo '<br>';
echo $x++;



?>