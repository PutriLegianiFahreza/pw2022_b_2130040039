<?php 

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data event berdasarkan id
$legientertaiment = query("SELECT * FROM nct WHERE id = $id")[0];

// cek apakah tomobol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {

    // Cek Keberhasilan
   if(ubah($_POST) > 0) {
       echo " 
       <script>
            alert('data berhasil diubah !');
            document.location.href = 'index.php';
       </script>";
   }else {
       echo "<script>
            alert('data gagal diubah !');
            document.location.href = 'index.php';
       </script>";
   }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Tambah</title>
  </head>
  <body2>
<div class="ubah"> 
    <h1>Ubah Data</h1>
    <div class="card-body">
    
        <form action="" class="row g-3" method="POST" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $legientertaiment["id"];?>">
                <input type="hidden" name="gambarLama" value="<?= $legientertaiment["gambar"];?>">

            <div class="col-md-6">
                <label for="nama_artis" class="form-label">nama_artis</label>
                <input type="text" class="form-control" id="nama_artis" name="nama_artis" required value="<?= $legientertaiment["nama_artis"];?>">
            </div>

            <div class="col-md-6">
                <label for="nama_lagu" class="form-label">nama_lagu</label>
                <input type="text" class="form-control" id="nama_lagu" name="nama_lagu" required value="<?= $legientertaiment["nama_lagu"];?>">
            </div>

            <div class="col-md-10">
                <label for="album" class="form-label">album</label>
                <input type="text" class="form-control" id="album" name="album" required value="<?= $legientertaiment["album"];?>">
            </div>

            <div class="col-md-6">
                <label for="durasi" class="form-label">durasi</label>
                <input type="time" class="form-control" id="durasi" name="durasi" required value="<?= $legientertaiment["durasi"];?>">
            </div>
            <div class="col-md-6">
                <label for="tanggal_liris" class="form-label">tanggal_liris</label>
                <input type="date" class="form-control" id="tanggal_liris" name="tanggal_liris" value="<?= $legientertaiment["tanggal_liris"];?>">
            </div>
            <div class="col-md-0">
                <label for="gambar" class="form-label">gambar</label>
                <br>
                <img src="img/<?= $legientertaiment['gambar'];?>" width="50">
                <br> 
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="col-md-4">
             <button type="submit" class="btn btn-primary" name="submit">Ubah Data</button>
            </div>
            <div class="col-md-4">
            <a href="index.php" ><button type="button" class="btn btn-dark">kembali ke admin</button></a>
            </div>
        </form>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body2>
</html>