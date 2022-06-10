<?php 
REQUIRE 'functions.php';
if(hapus($_GET["hapus"])) {
    echo "<script>
    alert('data berhasil DIHAPUS !');
    document.location.href='index.php';</script>";
}