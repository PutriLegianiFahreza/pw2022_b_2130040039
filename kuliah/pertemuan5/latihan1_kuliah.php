<?php
//array
//Array adalah variabel yang dapat menyimpan lebih dari satu nilai sekaligus

$hari = "Senin";
$hari2 = "Selasa";
$hari7 = "Minggu";

$bulan = "januari";
$bulan12 = "desember";

$mahasiswa = "legi";

//Membuat ARRAY 
$hari = ["Senin", "Selasa", "Rabu", "kamis"]; //cara baru
$bulan = array("januari", "februari", "maret"); //cara lama
$myArray = [100, "legi", true];

//menampilkan Array
//menampilkan 1 elemen menggunakan index, dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

//menampilkan semua isi array sekaligus
//var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

//mencetak semua isi array menggunakan looping
//for
for($i = 0; $i < 4; $i++) {
   echo $hari[$i];
   echo "<br>";
}

echo "<hr>";

//foreach
foreach($bulan as $b){
    echo $b;
    echo "<br>";
}

//memanipulasi Array
//menambahkan elemen di akhir array
$hari[] = "Jum'at";
$hari[] = "Sabtu";
var_dump($hari);
?>