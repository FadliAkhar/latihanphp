<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "18339.Fadli", "phpdasar");

// ambil data dari tabel mahasiswa/ query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_row() => mengembalikan array numerik
// mysqli_fetch_assoc() => mengembalikan array assosiatif
// mysqli_fetch_array() => mengembalikan kedua array numerik dan assosiatif / double
// mysqli_fetch_object() => mengembalikan nilai object  


// melakukan looping
// while($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }


// untuk mengecek apakah terjadi eror
// if (!$result ){
//     echo mysqli_error($conn);
// }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Aksi</th>
</tr>



<?php $i = 1; ?>
<?php while($row = mysqli_fetch_assoc($result)) : ?>
<tr>
    <td><?= $i; ?></td>
    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
    <td>
        <a href="">Ubah</a> |
        <a href="">Hapus</a>
    </td>
</tr>
<?php $i++; ?>
<?php endwhile;?>

</table>

</body>
</html>