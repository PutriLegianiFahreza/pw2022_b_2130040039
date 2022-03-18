<?php
$mahasiswa = [ ["Putri Legiani", "213040039", "teknik informatika", "putrilegiani234@gmail.com"],
             ["najwa", "213040041", "najwaoyo11@gmail.com", "teknik informstika"],
             ["salma", "213040064", "salmaofficial@gmail.com", "teknik informatika"],
             ["gloria", "213040067", "gloriaofficial@gmail.com", "teknik informatika"],
             ["indri", "213040000", "indriimoet1@gmail.com", "teknik informatika"]
]

?>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>


    <h1>Daftar Mahasiswa</h1>

    <ul>
        <li>legi</li>
        <li>teknik informatila</li>
        <li>213040039</li>
        <li>putrilegiani234@gmail.com</li>
    </ul>

    <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs[0] ?></li>
        <li>NPM: <?php echo $mhs[1]?></li>
        <li>Email: <?php echo $mhs[2]?></li>
        <li>Jurusan: <?php echo $mhs[3]?></li>
    </ul>
<?php } ?>

    </body>
</html>