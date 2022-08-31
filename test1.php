<?php
    $mahasiswa = [
        ["Edwin", "672020272", "Teknik Informatika", "edwinduta@gmail.com"],
        ["Romadi", "671945001", "Teknik Informatika", "romadi@gmail.com"],
        ["Namtri", "671945002", "Teknik Informatika", "namtri@gmail.com"]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NIM :<?= $mhs[1]; ?></li>
        <li>Progdi :<?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>