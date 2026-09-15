<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="dashboard.php" method="POST">
        <label for="username">username</label><br>
        <input type="text" name="username" placeholder="username"><br>
        <label for="bahasa">pilih bahasa</label>
        <select name="bahasa" id="bahasa">
            <option value="indonesia">indonesia</option>
            <option value="inggris">inggris</option>
        </select>
        <br>
        <button type="submit">Login</button>
    </form>

    <?php
        if (isset($_POST["username"]) && isset($_POST["bahasa"])) {
            session_start();
            $_SESSION["nama"] = $_POST["username"];
            setcookie("bahasa", $_POST["bahasa"], time() + 60*60*24*30);
            header('Location: /pemweb/kuki/dashboard.php');
            
        }
    ?>
</body>
</html>