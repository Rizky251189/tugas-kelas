<?php
    require_once ("conten.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="images/<?= $gambar?>" alt="">
    <?php
        foreach ($variable as $key => $value) {
            # code...
        }
    ?>
</body>
</html>