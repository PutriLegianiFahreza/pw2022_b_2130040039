<?php 
require 'functions.php';


$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Table mahasiswa</title>
  </head>
  <body>
    <h1>Table mahasiswa</h1>

    <a href="tambah.php" class="btn btn-primary">Tambah data mahasiswa</a>
    <table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">npm</th>
      <th scope="col">nama</th>
      <th scope="col">jurusan</th>
      <th scope="col">email</th>
      <th scope="col">gambar</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $id = 1; foreach ($mahasiswa as $mhs) {?>
   <tr class="align-midlle">
  <tbody>
      <th scope="row"><?= $id++; ?></th>
      <td><?= $mhs["npm"];?></td>
      <td><?= $mhs["nama"];?></td>
      <td><?= $mhs["jurusan"];?></td>
      <td><?= $mhs["email"];?></td>
      <td><img src="img/<?= $mhs["gambar"];?>" width="50"></td>
      <td>
        <a href="ubah.php?id=<?= $mhs["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('?');">hapus</a>
      </td> class="btn badge bg-warning">ubah</a>
        <a href="hapus.php?id=<?= $mhs["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('yakin hapus ?');">hapus</a>
      </td>
    </tr>
  </tbody>
  <?php }
   ?>
</table>

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


