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
    $gambar = htmlspecialchars($data["gambar"]);


      // query insert data
      $query = "INSERT INTO mahasiswa
      VALUES 
      (NULL, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";



mysqli_query($conn, $query );



return mysqli_affected_rows($conn);

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
     $gambar = htmlspecialchars($data["gambar"]);
 
 
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