<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel = 'stylesheet' href = '../../css/global.css'>
    </head>
</html>
<body>
    <?php require './../templates/navbar.php' ?>
    <div id = 'login'>
            <form action="../auth/login.php" method = 'post' id = 'login'>
                <input type="text" name = 'username' placeholder="username">
                <input type="text" name = 'password' placeholder="password">    
                <input type="submit" value="submit">
            </form>
    </div>    
</body>