<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <table border="1" celpadding="10" cellspacing="0">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
    </table>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
<table border="1" celpadding="10" cellspacing="0">
    <?php
    for($i = 1; $i <= 3; $i++){             
        echo "<tr>";
        for($p = 1; $p <= 5; $p++){
            echo "<td>$i,$p</td>";
        }
        echo "</tr>";
    }
    ?>

    $i = baris
    $p = kolom
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna_baris{
            background-color: silver;
        }
    </style>
</head>
<body>
<table border="1" celpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 == 1 ) : ?>
                  <tr class="warna_baris">
                <?php else : ?>
                <tr>
             <?php endif;?>
                <?php for($p = 1; $p <=5; $p++) :?>
                    <td><?php echo "$i,$p"; ?></td>
                    <?php endfor;?>
            </tr>
        <?php endfor; ?>

</body>
</html>

