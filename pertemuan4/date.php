<?php
// Date untuk menampilkan tanggal dengan format tertentu
    // echo date("l-m-M-Y");


// Dibawah ini adalah beberapa function
// Time 
// Date
// echo time();
// echo date("l" , time()+ 172800)
// echo date("d M Y" , time()- 60*60*24*2)

// mktime
// membuat sendiri detik
// cara menulisnya (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
//  echo mktime(0,0,0,6,16, 2007);
// mengetahui hari pada tanggal diatas
 echo date("l", mktime(0,0,0,6,16, 2007));


// strtotime adalah kebalikan dari mktime, strtotime menggunakan string
 echo date("l", strtotime ("16 june 2007"));


// String 
//strlen untuk menghitung panjang string (length)
//strcmp untuk membandingkan dua buah string
//explode memecah string menjadi array => memecah nama file dan extensinya
//htmlspecialchars untuk pengamanan website dari orang yang ingin measuk ke website kita


// utility
// var_dump => fungsi untuk mencetak isi dari variabel
// isset() => untuk megecek nilai variabel apakah sudah dibikin atau belum, dan akan menghasilkan nilai boolean true/false
// empty() => untuk mengecek apakah variabel sudah isi atau belum
// die() => untuk mengentikan program
// sleep() => untuk mengentikan sementara program

















?>