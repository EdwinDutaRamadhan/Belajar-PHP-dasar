<?php
    if(!isset($_GET["Nama"]) || !isset($_GET["Jenis"])|| !isset($_GET["Platform"])|| !isset($_GET["Site"])|| !isset($_GET["Gambar"])){
        header("Location: get&post.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["Gambar"]; ?>" alt=""></li>
        <li>Nama :<?= $_GET["Nama"]; ?></li>
        <li>Jenis :<?= $_GET["Jenis"]; ?></li>
        <li>Platform :<?= $_GET["Platform"]; ?></li>
        <li>Site : <?= $_GET["Site"]; ?></li>
    </ul>
    <a href="get&post.php">kembali ke halaman utama</a>
</body>
</html>