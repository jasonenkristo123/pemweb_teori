<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_FILES['upfile']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['upfile']['tmp_name'];
        $name = $_FILES['upfile']['name'];
        $destination = "uploads";

        if (move_uploaded_file($tmp_name, $destination)) {
            echo "File uploaded successfully";
        } else {
            echo "Failed to upload file";
        }
    } else {
        echo "An error occurred";
    }
    ?>
</body>

</html>