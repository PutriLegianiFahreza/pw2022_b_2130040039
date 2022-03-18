<?php
// array
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
//key-nya adalah index, yang dimulai dari 0

$hari1 = "senin";
$hari2 = "selasa";

// membuat array
// cara lama
$hari = array ("senin" , "selasa" , "rabu");
// cara baru 
$bulan = ["januari" , "februari" , "maret"];
$arr1 = [123 , "tulisan" , false];

// menampilkan array
// var_dump() / print_r()

var_dump($hari);
print_r($bulan);

// menampilkan 1 elemen pada array
echo $arr1[0];
echo $bulan[1];

//menambahkan elemen pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";

var_dump($hari)

?>