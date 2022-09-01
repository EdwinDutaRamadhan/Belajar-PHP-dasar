<?php
    //koneksi ke database
    $conn = mysqli_connect("localhost","root","","socialmedia_db");

    //get data from table
    $result = mysqli_query($conn, "SELECT * FROM sosmed_tbl");
    
    //prompt error message
    if(!$result){
        echo mysqli_error($conn);
    }

    //get data fromt table object result (fetch)
    //mysqli_fetch_row(); //array numeric
    //mysqli_fetch_assoc(); //array associative
    //mysqli_fetch_array(); // array keduanya
    //mysqli_fetch_object(); //

    // while($sosmed = mysqli_fetch_assoc($result)){
    //     var_dump($sosmed);
    // }
    

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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
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
        <?php endwhile; ?>
    </table>
   
</body>
</html>