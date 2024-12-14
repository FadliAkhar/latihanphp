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

?>