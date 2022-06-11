<?php

    require_once './../inc/errorConst.php';
    session_start();

    if(isset($_SESSION['username']))
    {
        header('location: ./../pages/homePage.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel='stylesheet' href='./../../css/global.css'>
</head>

<body>
    <?php require './../templates/navbar.php' ?>
    <div id='container-main'>
        <?php require './../templates/leftBar.php' ?>
        <div class='container-form'>
            <form action="./../auth/login.php" method='post' id='login'>
                <p>username</p>
                <input class='box-form' type="text" name='username' placeholder="username">
                <p>password</p>
                <input class='box-form' type="password" name='password' placeholder="password">
                <input class='box-form' type="submit" value="submit" id='submit'>
            </form>
        </div>
        <?php require './../templates/rightBar.php' ?>

    </div>
</body>

</html>