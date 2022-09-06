<?php
    session_start();
    // if( isset($_COOKIE['login'])) {
    //     if( $_COOKIE['login'] == 'true'){
    //         $_SESSION['login'] = true;
    //     }
    // }
    require 'functiondb.php';
    if( isset($_POST['login'])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM admin_tbl WHERE Username = '$username'");
        //cek username di database
        if( mysqli_num_rows($result) == 1 ){
            //cek password di database
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row['Password']) ){
                //username password benar
                //set session
                $_SESSION["login"] = true;
                //remember me
                if( isset($_POST['remember'])){
                    setcookie('username', hash('sha256',$row['username']), time()+60);
                }
                header("Location: main.php");
                exit;
            }
        }
        $error = true;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if( isset($error)) : ?>
        <p style="color:red;font-size:10px;font-weight:bold;">username atau password salah!</p>
    <?php endif; ?>
    
    <form action="" method= "post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required></input>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required></input>
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember"></input>
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Masuk</button>
            </li>
        </ul>
    </form>
    
</body>
</html>