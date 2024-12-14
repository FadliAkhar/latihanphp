<?php
// ini adalah komentar

/*
ini untuk beberapa baris
*/

// pertemuan 2 - PHP dasar
// sintax PHP
// Standar output
// echo, print
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. HTML didalam PHP
// 2. PHP didalam HTML


// Variabel Dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka namun boleh mengandung angka
// $1nama = "aku";
$nama1 = "Fadli";



// HTML didalam PHP
// echo "<h1> Halo Fadli Akhar, Selamat Datang</h1>"


// echo "Halo, Nama Saya $nama1 ";
// kalau menggunakan tannda kutip satu otomatis variabelnya tida bisa terpanggil atau interpolasinya tida terpanggil
// echo 'Halo, Nama Saya $nama1 ';


// Operator:
// Aritmatika
// + - * / %
// $x = 34;
// $y = 44;
// echo $x * $y;


// Penggabung string / concatenation / concat
// .
// $nama_depan = "Fadli";
// $nama_belakang = "Akhar";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
$m = 4;
$m *= 6;
echo $m;

// Perbandingan 
// <, >, <=, >=, ==, !=
var_dump(5 == 6); 
var_dump(6 == "6");


// identitas 
// === dan !==
var_dump(6 === "6");


// Logika
// &&, ||, !
$p = 10;
// var_dump($p < 20 && $p % 2 == 0 ); harus true semua
// var_dump($p < 50 || $p % 2 == 0 ); salah satu true masih bisa




?>


<!-- PHP didalam HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Halo <?php echo $nama1;?>, Selamat Datang Di Aplikasi ini</h2>
    <p><?php echo "INI ADALAH PARAGRAF"?></p>
</body>
</html>
 