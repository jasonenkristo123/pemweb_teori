<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
    <?php
        session_start();
        session_destroy();
        setcookie("bahasa", $_POST["bahasa"], time() - 60*60*24*30);
        header("Location: /pemweb/kuki/login.php");
    ?>
</body>
</html>