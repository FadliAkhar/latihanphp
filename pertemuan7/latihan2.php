<?php
// cek apakah tida ada data di $_GET
// isset adalah untuk mengecek variabel apakah sudah pernah dibuat atau belum
if( !isset ($_GET["nama"]) ||
    !isset ($_GET["nrp"]) ||
    !isset ($_GET["email"]) ||
    !isset ($_GET["jurusan"]) ||
    !isset ($_GET["gambar"])){

 // redirect memindahkan user dari sebuah halaman ke halaman lain
 header("location: latihan1.php");
 exit;
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET ["gambar"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="latihan1.php">Kembali Ke Daftar Mahasiswa</a>



</body>
</html>