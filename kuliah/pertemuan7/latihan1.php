<?php 
// variabel scope / lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }
// tampilX();

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative

// $_GET
$mahasiswa = [
    [
        "nama" => "putri legiani fahreza",
        "NRP" => "213040039",
        "email" => "putrilegiani234@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "zpt.jpg.png"
    ],
    [
        "nama" => "najwa septiana",
        "NRP" => "213040121",
        "email" => "najwaseptiana@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "zpt2.jpg.png"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
        <?= $mhs["NRP"]; ?>&email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>$gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>


</body>
</html>