<?php 
require 'functions.php';


if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>
        alert('user baru telah ditambahkan!')
        </script>";
        return false;
    }else{
        echo mysqli_error($conn);
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <label for="password">Konfirmasi Password:</label><br>
        <input type="password" name="password2" id="password2" required><br><br>

        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>

</body>
</html>