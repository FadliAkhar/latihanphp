<?php
// $mahasiswa = [
//     ["Fadli Akhar", "18339", "Teknik Nuklir", "fadliahar29@gmail.com"],
//     ["Dafi Reihan", "18335", "Teknik Sipil", "dafiansyah8@gmail.com"]
// ];

//array Asosiatif
// key-nya adalah string yang kita buat sendiri / string


// perbedaan dari kedua array yaitu:
// numerik harus urut dengan elemennya 
// sedangkan asosiatif tidak urut tidak apa yang penting penulisan stringnya benar



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
// memanggil array numerik dan asosiatif
echo $mahasiswa [1]["tugas"][1];





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?php echo $mhs["gambar"]; ?>">
        </li>

        <li>Nama    : <?php echo $mhs["nama"]; ?></li>
        <li>Nrp     : <?php echo $mhs["nrp"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
        <li>Email   : <?php echo $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>