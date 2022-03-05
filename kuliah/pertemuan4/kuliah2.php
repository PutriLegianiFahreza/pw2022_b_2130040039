<?php
//definisikan masing masing sisi kubus
$a = 9;
$b = 4;


//hitung masing masing volume kubus
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

//hitung total 2 volume
$total = $volume_a + $volume_b;

//kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
echo "<hr>";

//deklarasi / definisi function
function totalVolumeDuaKubus($a , $b) {
    $volume_a = pow($a, 3);
    $volume_b = pow($b, 3);


    $total = $volume_a + $volume_b;

    return "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
}

//pemanggilan / eksekusi
echo totalVolumeDuaKubus(9,4);
echo "<br>";
echo totalVolumeDuaKubus(10,20);
echo "<br>";
echo totalVolumeDuaKubus(5,6);
echo "<hr>";

//buat sebuah fungsi untuk menghitung luas segitiga
function LuasSegiTiga($alas,$tinggi) {
    
    $luas_segitiga = 1/2*$alas*$tinggi;
    return "hasil hitung luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luas_segitiga";
}

echo LuasSegiTiga(2,4);
//luas segitiga dengan alas 2 tingggi 4 adalah 4

?>