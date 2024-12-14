<?php
// array 
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// nilai yang di array dinamakan elemen

//cara lama
$hari = array("Senin", "Selasa", "Rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret"];

//dengan semua tipe data
$tipe = [123, "tulisan", false];

//menampilkan array
// var_dump() / print_r() artinya print secara rekursif kalau print aja sama dengan echo
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan 1 elemen pada array
// bisa menggunakan echo dengan syarat harus satu elemen didalam parameter
// echo $tipe[0];
// echo "<br>";
// echo $bulan[1];

//menambahkan elemen pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);




?>