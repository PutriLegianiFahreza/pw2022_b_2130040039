<?php 
require 'functions.php';
// ketika tombol tambah diklik
if(isset ($_POST["tambah"])) {
    // jalankan fungsi tambah()
    if(tambah($_POST["tambah"])) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href='index.php';</script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data Mahasiswa</title>
  </head>
  <body>
    <h1>Form Tambah Data Mahasiswa</h1>

    <a href="index.php">Kembali Ke Daftar Mahasiswa</a>

    <div class="row mt-3"></div>
    <div class="col-8">
        <form action="" method="POST" autocomplete="off">
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="file" class="form-control" id="npm" name="npm" 
                required maxlength="9" minlength="9" style="width: 150px;" >
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="file" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="file" class="form-control" id="jurusan" name="jurusan" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary" name="tambah">Tambahkan Data Mahasiswa</button>

        </form>
    </div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


