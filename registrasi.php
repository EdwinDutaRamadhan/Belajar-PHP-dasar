<?php
    require 'functiondb.php';

    if( isset($_POST["register"])){
        if( registrasi($_POST) > 0){
            echo "
                <script>
                    alert('user baru berhasil ditambahkan!');
                </script>
            ";
        }else{
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        label{
            display : block;
        }
    </style>
</head>
<body>
    <h1>Registrasi Admin</h1>

    <form action="" method= "post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" placeholder="Username" required id="username" ></input>
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="Password" required id="password" ></input>
            </li>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" placeholder="Konfirmasi Password" required id="password2" ></input>
            </li>
            <li>
                <button type="submit" name="register">Daftar</button>
            </li>
        </ul>
    </form>
    
</body>
</html>