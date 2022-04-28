<?php
$album = [
    [
        "Nama" => "Emphaty Album",
        "Harga" => "300.000",
        "gambar" => "emphaty.jpg"
    ],
    [
        "Nama" => "Hot Sauce Album",
        "Harga" => "289.000",
        "gambar" => "hotsauce.jpg"  
    ],
    [
        "Nama" => "neozone album",
        "Harga" => "255.000",
        "gambar" => "neozone.jpg"
    ],
    
    [
        "Nama" => "Resonance Album",
        "Harga" => "320.000",
        "gambar" => "resonance.jpg"  
    ],
    
    [
        "Nama" => "Universe Album",
        "Harga" => "320.000",
        "gambar" => "universe.jpg"  
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Album</title>
</head>
<body>
    <h1>Album NCT</h1>
<?php foreach( $album as $alb ) : ?>
    <ul>
        <li>
            <img src="img/<?= $alb["gambar"]; ?>">
        </li>
        <li>Nama : <?= $alb["Nama"]; ?></li>
        <li>Harga : <?= $alb["Harga"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>