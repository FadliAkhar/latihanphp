<?php
require 'functions.php'; // Pastikan file ini memiliki koneksi ke database ($conn)

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query username
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if (!$result) {
        die("Query failed: " . mysqli_error($conn)); // Debugging query jika terjadi kesalahan
    }

    // Cek username
    if (mysqli_num_rows($result) === 1) {
        // Ambil data user
        $row = mysqli_fetch_assoc($result);

        // Cek password
        if (password_verify($password, $row["password"])) {
            // Redirect ke halaman berikutnya
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Password salah!');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>