<?php
    require 'functiondb.php';
    //get data url
    $id = $_GET['id'];
    //query data berdasarkan ID
    $sosmed = query("SELECT * FROM sosmed_tbl WHERE ID = $id")[0];

    if( isset($_POST["submit"]) ){
        if( ubah($_POST)>0){
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'main.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'main.php';
                </script>
            ";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>
<body>
    <h1>Ubah Data Sosial Media</h1>

    <form action="" method= "post" enctype="multipart/form-data">
        <ul>
            <input type="hidden" name="id" value="<?= $sosmed["ID"]; ?>">
            <input type="hidden" name="GambarLama" value="<?= $sosmed["Gambar"]; ?>">
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama" required value="<?= $sosmed["Nama"] ?>"></input>
            </li>
            <li>
                <label for="Jenis">Jenis : </label>
                <input type="text" name="Jenis" id="Jenis" required value="<?= $sosmed["Jenis"] ?>"></input></input>
            </li>
            <li>
                <label for="Platform">Platform : </label>
                <input type="text" name="Platform" id="Platform" value="<?= $sosmed["Platform"] ?>"></input>
            </li>
            <li>
                <label for="Site">Site : </label>
                <input type="text" name="Site" id="Site" value="<?= $sosmed["Site"] ?>"></input>
            </li>
            <li>
                <label for="Gambar">Gambar : </label><br>
                <img src="img/<?= $sosmed['Gambar'];?>" alt="not found" width="40px"><br>
                <input type="file" name="Gambar" id="Gambar"></input>
            </li>
            <button type="submit" name="submit" id="submit">Ubah</button>
        </ul>
        
    </form>
</body>
</html>