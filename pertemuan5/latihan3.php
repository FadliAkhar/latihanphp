<?php
// $mahasiswa = ["Fadli Akhar", "987387920", 
// "Teknik Nuklir", "fadliahar29@gmail.com"];

// array multi dimensi (array didalam array)untuk jika mahasiswa lebih dari satu



// array numerik dimana index dari array ini adalah angka
$mahasiswa = [
    ["Fadli Akhar", "18339", "Teknik Nuklir", "fadliahar29@gmail.com"],
    ["Dafi Reihan", "18335", "Teknik Sipil", "dafiansyah8@gmail.com"]
];

// untuk pemanggilan data
// <?php echo
//<?=

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
        <li>Nama    : <?php echo $mhs[0]; ?></li>
        <li>Nis     : <?php echo $mhs[1]; ?></li>
        <li>Jurusan : <?php echo $mhs[2]; ?></li>
        <li>Email   : <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>