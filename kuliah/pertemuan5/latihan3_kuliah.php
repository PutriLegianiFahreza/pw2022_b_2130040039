<?php

$mahasiswa = [
    ["Putri Legiani", "213040039", "putrilegiani234@gmail.com", "Teknik Informatika"],
    ["najwa", "213040041", "najwaoyo11@gmail.com", "pekerja oyo"],
    ["salma", "213040064", "salmaofficial@gmail.com", "teknik informatika"],
    ["gloria", "213040067", "gloriaofficial@gmail.com", "teknik informatika"],
    ["indri", "213040000", "indriimoet1@gmail.com", "spesialis oyo"]


]

?>
<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?php echo $mhs[0] ?></li>
        <li>NPM: <?php echo $mhs[1]?></li>
        <li>Email: <?php echo $mhs[2]?></li>
        <li>Jurusan: <?php echo $mhs[3]?></li>
    </ul>
<?php } ?>