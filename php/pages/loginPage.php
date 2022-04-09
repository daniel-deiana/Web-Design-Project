<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel='stylesheet' href='./../../css/global.css'>
</head>

<body>
    <?php require './../templates/navbar.php' ?>
    <div id='login'>
        <form action="./../auth/login.php" method='post' id='login'>
            <input class='box-form' type="text" name='username' placeholder="username">
            <input class='box-form' type="text" name='password' placeholder="password">
            <input class='box-form' type="submit" value="submit">
        </form>
    </div>
</body>

</html>