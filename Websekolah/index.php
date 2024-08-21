<?php
    require_once("konten.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$sekolah?></title>
</head>
<body>
    s<h1><?=$judul?></h1>
    <p><?=$ii?></p>
    <hr>
    <h1>Jadwal Pelajaran Rpl Tahun 2024/2025</h1>
    <table border="1">
        <thead>
            <tr>
                <th><?= $hari[0]?></th>
                <th><?= $hari[1]?></th>
                <th><?= $hari[2]?></th>
                <th><?= $hari[3]?></th>
                <th><?= $hari[4]?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $pelajaran[0]?></td>
                <td><?= $pelajaran[1]?></td>
                <td><?= $pelajaran[2]?></td>
                <td><?= $pelajaran[3]?></td>
                <td><?= $pelajaran[4]?></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td><?= $pelajaran[5]?></td>
                <td><?= $pelajaran[6]?></td>
                <td><?= $pelajaran[7]?></td>
                <td><?= $pelajaran[8]?></td>
                <td><?= $pelajaran[9]?></td>
            </tr>
        </tbody>
    </table>
    <hr>
    <img src="image/<?= $gambar[0];?>" alt="">


    
</body>
</html>