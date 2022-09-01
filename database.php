<?php
    require 'functiondb.php';

    //get data from table
    $sosmed = query("SELECT * FROM sosmed_tbl");
    
    //prompt error message

        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php to database</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <table border = "1" cellspacing = "0" cellpadding = "10">
        <tr>
           <th>No.</th> 
           <th>Aksi</th>
           <th>Gambar</th>
           <th>Nama</th>
           <th>Jenis</th>
           <th>Platform</th>
           <th>Site</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($sosmed as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["Gambar"]; ?>" width="40"></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Jenis"]; ?></td>
            <td><?= $row["Platform"]; ?></td>
            <td><?= $row["Site"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
   
</body>
</html>