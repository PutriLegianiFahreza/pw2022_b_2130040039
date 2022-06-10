<?php 
//koneksi ke db
$conn = mysqli_connect('localhost','root','', 'pw2022_a_213040034')
//mematikan coment jika di atas terdapat komen error
or die('KONEKSI GAGAL!');

function query($query) {
    global $conn;
    //Query data ke tabel mahasiswa
    $result = mysqli_query($conn, $query)
    //supaya terlihat ada error jika aada kesalahan
    or die(mysqli_error($conn));
    
    //Stapkan data $mahasiswa
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
}

function tambah($data){
    global $conn;

    //cek apakah user tidak mengupload gambar
    if($_FILES["gambar"]["error"] === 4) {
        //pilih gambar default
        $gambar = 'zpt.jpg';
    } else {
      // jalankan fungsi upload
      $gambar = upload();
      //cek jika upload gagal
      if(!$gambar) {
          return false;
      }

    }

    $npm =htmlspecialchars($data["npm"]);
    $nama =htmlspecialchars($data["nama"]);
    $jurusan =htmlspecialchars($data["jurusan"]);
    $email =htmlspecialchars($data["email"]);
    // $gambar =htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO 
            mahasiswa
             VALUES (null, '$npm', '$nama', '$jurusan', '$email', '$gambar')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    //query mahasiswa berdasarkan id
    $mhs = query("select * FROM mahasiswa WHERE id = $id")[0];
    //hapus gambar
    unlink('img/' . $mhs["gambar"]);

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah ($data) {
    global $conn;
    $id = $data["id"];
    $npm =htmlspecialchars($data["npm"]);
    $nama =htmlspecialchars($data["nama"]);
    $jurusan =htmlspecialchars($data["jurusan"]);
    $email =htmlspecialchars($data["email"]);
    $gambar =htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                npm = '$npm',
                nama = '$nama',
                jurusan = '$jurusan',
                email = '$email',
                gambar = '$gambar'
                WHERE id = $id
            ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload() {
    //siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    //cek apakah yang diupload bukan gambar
    if (!in_array(strtolower($filetype), $allowedtype)) {
        echo "<script>
                alert('yang anda upload bukan gambar');
              </script>";
        return false;
    }

    //cek gambar apakah terlalu besar
    if($filesize > 1000000){
        echo "<script>
                 alert('ukuran gambar terlalu besar');
              </script>";
        return false;
    }


    //proses upload gambar
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/' . $filename);


    return $newfilename;
}

?>