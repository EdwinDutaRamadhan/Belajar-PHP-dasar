<?php
    if(isset($_POST["submit"])) {
        if($_POST["username"] == "Admin" && $_POST["password"] == "123"){
            header("Location: admin.php");
            exit;
        } else{
            $error = true;
        }
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
    <?php if( isset($error) ) : ?>
        <p style="color:red;font-size:10px;font-weight:bold;text-align:center;">Uername atau password salah</p>
    <?php endif; ?>    
    <ul>    
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username" ></input>
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password" ></input>
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>