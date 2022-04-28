<?php

//array associative
//array yang indexnya berupa string , yang berasosiasi dengan nilainya
$mahasiswa = [
    ["nama" => "Putri Legiani",
     "npm" => "213040039",
     "email" => "putrilegiani234@gmail.com",
     "jurusan" => "Teknik Informatika"],

    ["nama" =>"najwa",
     "npm" => "213040041",
     "email" => "najwaoyo11@gmail.com",
     "jurusan" => "Teknik Informatika"],

    ["nama" =>"salma",
     "npm" => "213040064",
     "email" => "salmaofficial@gmail.com",
     "jurusan" => "teknik informatika"],

    ["nama" =>"gloria","npm" => "213040067",
     "email" => "gloriaofficial@gmail.com",
     "jurusan" => "teknik informatika"],

    ["nama" =>"indri",
     "npm" =>"213040000",
     "email" => "indriimoet1@gmail.com",
     "jurusan" => "teknik informatika"]
            ];

// var_dump($mahasiswa[4]["email"]);

?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?= $mhs["nama"] ?></li>
        <li>NPM: <?= $mhs["npm"]?></li>
        <li>Email: <?php echo $mhs["email"]?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"]?></li>
    </ul>
    <?php } ?>