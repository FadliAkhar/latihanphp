<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';


//koneksi ke database
$conn = mysqli_connect("localhost", "root", "18339.Fadli", "phpdasar");


// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){


    // cek apakah data berhasil di tambahkan atau tidak
    // var_dump(mysqli_affected_rows($conn));
    if(tambah($_POST) > 0){

        // versi php
       // echo " data berhasil ditambahkan!";

       // versi javascript
        echo "
                <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
                </script>
            ";


        }else{
            // echo "data gagal ditambahkan!";
            echo "
            <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
            </script>
        ";
        }


}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP  :</label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
               <button type="submit" name="submit">Tambah!</button>
            </li>
        </ul>

    </form>

    <a href="index.php">Kembali Ke Data Mahasiswa</a>

</body>
</html>