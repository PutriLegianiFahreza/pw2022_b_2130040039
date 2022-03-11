<?php
function salam($waktu, $nama) {
    return "selamat datang $waktu $nama!";
}

?>
<html>
    <head>
        <title>latihan function</title>
    </head>
    <body>
        <h1>selamat datang administrator!</h1>
        <h1><?php echo salam("siang", "legii");?></h1>
    </body>
</html>