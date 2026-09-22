<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arfa loloy</title>
</head>

<body>
    <?php
    echo '<h1>Halo</h1>';

    for ($i = 0; $i <= 10; $i++) {
        echo $i;
    }

    class Arfa
    {
        public static function Arfalolok($name)
        {
            return $name;
        }


    }

    $arrayArfa = [
        "name" => "elek",
        "age" => 10,
    ];

    $profile = (object) $arrayArfa;

    echo $profile->name;

    echo Arfa::Arfalolok('arfa');

    $person = array('Edison', 'arfa', 'qalbi');
    $animal = array(
        "arfa" => "kucing",
        "qalbi" => "panda"
    );

    echo "<br>";

    echo $person[0];
    echo $animal['arfa'];
    
    

    ?>
</body>

</html>