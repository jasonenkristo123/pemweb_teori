<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<?php
    setcookie("nama", "habibi", time() + 600);

    if (isset($_COOKIE["nama"])) {
        echo $_COOKIE["nama"];
    }

    session_start();
    $_SESSION["panggilan"] = "Arfasya";

    if (isset($_SESSION["panggilan"])) {
        echo $_SESSION["panggilan"];
    }
?>
    
</body>
</html>