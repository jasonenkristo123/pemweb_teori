<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h3>255150701111032 - Jason Enkristo</h3>
    <form method="POST" action="">
        <label for="first_number">Angka 1</label><br>
        <input type="text" name="first_number" placeholder="angka 1" required> 
        <br><br>
        <label for="second_number">Angka 2</label><br>
        <input type="text" name="second_number" placeholder="angka 2" required>
        <br><br>

        <label for="operator">Operasi</label><br>
        <input type="radio" name="tambah">+</input>
        <input type="radio" name="kurang">-</input>
        <input type="radio" name="kali">*</input>
        <input type="radio" name="bagi">/</input>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['first_number']) && isset($_POST['second_number'])) {
        $first_number = $_POST['first_number'];
        $second_number = $_POST['second_number'];

        if (isset($_POST['tambah'])) {
            echo "Hasilnya adalah : ".$first_number + $second_number;
        }

        if (isset($_POST['kurang'])) {
            echo "Hasilnya adalah : ".$first_number - $second_number;
        }

        if (isset($_POST['kali'])) {
            echo "Hasilnya adalah : ".$first_number * $second_number;
        }

        if (isset($_POST['bagi'])) {
            echo "Hasilnya adalah : ".$first_number / $second_number;
        }
    }
    ?>
</body>
</html>