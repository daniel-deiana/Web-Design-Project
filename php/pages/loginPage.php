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
            <input class='form-elem' type="text" name='username' placeholder="username">
            <input class='form-elem' type="text" name='password' placeholder="password">
            <input class='form-elem' type="submit" value="submit">
        </form>
    </div>
</body>

</html>