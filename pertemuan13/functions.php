<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "18339.Fadli", "phpdasar");

function query($query) {
    global $conn;  // Menambahkan global untuk mengakses variabel $conn
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    // upload gambar
    $gambar = upload();
    if ( !$gambar ){
        return false;
    }


      // query insert data
      $query = "INSERT INTO mahasiswa
      VALUES 
      (NULL, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";



mysqli_query($conn, $query );

return mysqli_affected_rows($conn);

}


function upload(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];



    // cek apakah tidak ada gambar yang diupload
    if ($error === 4 ){
        echo "<script>
        alert('pilih gambar terlebih dahulu!')
        </script>";
        return false;
    }


    // cek apakah yang diulpoad adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert(' pilih file gambar dengan benar!')
        </script>";
        return false;
    }


    // cek jika  ukurannya terlalu besar
    if( $ukuranFile > 1000000){
        echo "<script>
        alert('ukuran gambar terlalu besar!')
        </script>";
        return false;
    }

    //lolos pengecekan, gambar siap di upload
    // generate nama baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}










function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $id = $data ["id"];

     // ambil data dari tiap elemen dalam form
     $nama = htmlspecialchars($data["nama"]);
     $nrp = htmlspecialchars($data["nrp"]);
     $email = htmlspecialchars($data["email"]);
     $jurusan = htmlspecialchars($data["jurusan"]);
     $gambarLama = htmlspecialchars($data["gambarLama"]);
 
 

     if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambarBaru = upload();
        if ($gambarBaru) {
            $gambar = $gambarBaru;
        } else {
            $gambar = $gambarLama; // Gunakan gambar lama jika upload gagal
        }
    }    

       // query insert data
       $query = "UPDATE mahasiswa
       SET 
        nama = '$nama',
        nrp = '$nrp', 
        email = '$email', 
        jurusan = '$jurusan',
        gambar = '$gambar'
        WHERE id = $id
        ";
 
 
 
 mysqli_query($conn, $query );
 
 
 
 return mysqli_affected_rows($conn);
}


function cari($keyword){
    $query = "SELECT * FROM mahasiswa
                WHERE 
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";

    return query($query);
}





?>