<?php 
// $mahasiswa = [
//     ["putri legiani", "213040039", "putrilegiani234@gmail.com", "Teknik informatika"],
//     ["najwa septiana", "213040121", "najwaseptiana@gmail.com", "Teknik informatika"]
// ];
// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
// echo $mahasiswa[1]["jurusan"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>