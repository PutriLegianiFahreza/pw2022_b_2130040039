<?php
//date
//untuk menampilkan tanggal dengan format tertentu

echo date("l");
echo "<hr>";
echo date("d");
echo "<hr>";
echo date("M");
echo "<hr>";
echo date("m");
echo "<hr>";
echo date("l , d-M-Y");
echo "<hr>";

//time
// UNIX Timestamp/epoch time
//detik yang sudah berlalu sejak 1 januari 1970

echo time();
echo "<hr>";
echo date("l" , time()+172800);
echo "<hr>";
echo date("l", time()+60*60*24*100);
echo "<hr>";
echo date("d M Y", time()-60*60*24*100);
echo "<hr>";
//mktime
//membuat sendiri detik
//mktime (0,0,0,0,0,0)
//jam , menit , detik , bulan , tanggal, tahun
echo date("l" , mktime(0,0,0,4,23,2000));
echo "<hr>";

//strtotime
echo date("l" , strtotime("14 feb 1997"));
?>