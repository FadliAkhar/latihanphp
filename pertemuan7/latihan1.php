<?php 
// Superglobals
// variabel global milik PHP
// merupakan array asosiatif

// $_GET["nama"] = "Fadli Akhar";
// var_dump($_GET);

// metode  request GET adalah metod pengirimann data melalui URL
// dan data tersebut bisa  diambil atau ditangkap oleh variabel superglobal $_GET

$mahasiswa = [
    [
        "nama" => "Fadli Akhar", 
        "nrp" => "18339",
        "email" => "fadliahar29@gmail.com",
        "jurusan" => "Teknik Nuklir",
        "gambar" => "fotoA.png"
    ],
    [
        "nama" => "Dafi Reihan", 
        "nrp" => "18335",
        "email" => "dafiansyah8@gmail.com",
        "jurusan" => "Teknik Sipil",
        "tugas" => [90, 80, 100],
        "gambar" => "fotoB.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
            &nrp=<?= $mhs["nrp"]; ?>
            &email=<?= $mhs["email"];?>
            &jurusan=<?= $mhs["jurusan"];?>
            &gambar=<?= $mhs["gambar"];?>"><?= $mhs ["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
