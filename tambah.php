<?php
    require 'functiondb.php';
    $conn = mysqli_connect("localhost","root","","socialmedia_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    if( isset($_POST["submit"]) ){
        
        if( tambah($_POST)>0){
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'database.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'database.php';
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
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah Data Sosial Media</h1>

    <form action="" method= "post">
        <ul>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama" required></input>
            </li>
            <li>
                <label for="Jenis">Jenis : </label>
                <input type="text" name="Jenis" id="Jenis" required></input></input>
            </li>
            <li>
                <label for="Platform">Platform : </label>
                <input type="text" name="Platform" id="Platform"></input>
            </li>
            <li>
                <label for="Site">Site : </label>
                <input type="text" name="Site" id="Site"></input>
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="text" name="Gambar" id="Gambar"></input>
            </li>
            <button type="submit" name="submit" id="submit">Tambah</button>
        </ul>
        
    </form>
</body>
</html>