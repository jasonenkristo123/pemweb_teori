<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION["nama"]) && isset($_COOKIE["bahasa"])) {
        if ($_COOKIE["bahasa"] == "indonesia") {
            echo "Selamat datang " . $_SESSION["nama"] . " di halaman dashboard";
        } else {
            echo "Welcome back " . $_SESSION["nama"] . " in dashboard page";
        }
    } else {
        header('Location: /pemweb/kuki/login.php');
        exit;
    }

    ?>

    <br>
    <a href="/pemweb/kuki/logout.php">Logout</a>
</body>

</html>