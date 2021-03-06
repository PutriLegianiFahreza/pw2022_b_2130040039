<?php 
//koneksi ke database
 $conn = mysqli_connect("localhost", "root", "", "legientertaiment" );

// function query
 function query ($query) {
     global $conn;
     $result = mysqli_query($conn, $query);
     $rows = [];
     while ($row = mysqli_fetch_assoc($result) ) {
         $rows[] = $row;
        
     }
     return $rows;

 }

//  function cari
    function cari ($keyword) {
        $query = "SELECT * FROM nct
        WHERE
        nama_artis LIKE '%$keyword%' OR
        nama_lagu LIKE '%$keyword%' OR
        album LIKE '%$keyword%'

        ";
        return query($query);
}

 // function tambah
 function Tambah($data) {
    global $conn;
     // ambil data dari tiap elemen dalam form
   $nama_artis = htmlspecialchars($data ["nama_artis"]);
   $nama_lagu = htmlspecialchars($data ["nama_lagu"]);
   $album = htmlspecialchars($data ["album"]) ;
   $durasi = htmlspecialchars($data ["durasi"]);
   $tanggal_liris = htmlspecialchars($data ["tanggal_liris"]);
  
    // upload Gambar
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

   // query insert data
   $query = "INSERT INTO nct
               VALUES
               ('', '$nama_artis', '$nama_lagu', '$album', '$durasi', '$tanggal_liris', '$gambar')
               ";
   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

 function upload() {
     $namaFile = $_FILES['gambar']['name'];
     $ukuranFile = $_FILES['gambar']['size'];
     $error = $_FILES['gambar']['error'];
     $tmpName = $_FILES['gambar']['tmp_name'];

    //  cek apakah tidak ada yang di upload
    if($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu');
          </script>";
          return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!!');
            </script>";
            return false;
    }

    // cek jika ukuran terlalu besar 
    if( $ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran Gambar terlalu Besar!!');
            </script>";
            return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
 }

function ubah ($data) {
    global $conn;

    $id=$data["id"];

    $nama_artis = htmlspecialchars($data ["nama_artis"]);
    $nama_lagu = htmlspecialchars($data ["nama_lagu"]);
    $album = htmlspecialchars($data ["album"]) ;
    $durasi = htmlspecialchars($data ["durasi"]);
    $tanggal_liris = htmlspecialchars($data ["tanggal_liris"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4) {
         $gambar = $gambarLama;
     } else {
     $gambar = upload();
     }

    // query insert data
    $query = "UPDATE nct SET
               nama_artis = '$nama_artis',
               nama_lagu = '$nama_lagu',
               album = '$album',
               durasi = '$durasi',
               tanggal_liris = '$tanggal_liris',
                gambar = '$gambar'
                WHERE id = $id
                ";
                mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM nct WHERE id = $id");
    return mysqli_affected_rows($conn);

}
?>