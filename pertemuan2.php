<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = array('1', '2', '3');
    $arr2 = array(
        "123" => "Arfa",
        "456" => "habibi",
        "789" => "qalbi"
    );

    foreach ($arr as $number) {
        echo "$number <br>";
    }

    foreach ($arr2 as $number => $value) {
        echo "$number => $value <br>";
    }

    function add($a, $b)
    {
        return $a + $b;
    }

    echo add(1, 2);

    
    ?>

    <form method="POST" action="result2.php">
        <label for="name">
            name :
        </label><br>
        <input type="text" name="name" placeholder="name"> <br>
        <label for="age">
            age :
        </label><br>
        <input type="number" name="age" placeholder="age"> <br>
        <button type="submit">Submit</button>
        <br>
        <br>
    </form>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="upfile">
            Upload file :
        </label>
        <input type="file" name="upfile"> <br>
        <input type="submit" value="Upload">
    </form>

</body>

</html>