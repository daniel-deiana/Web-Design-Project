<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel = 'stylesheet' href = '../../css/global.css'>
    </head>
</html>
<body>
    <?php require './../templates/navbar.php' ?>
    <div id = 'container'>
        <div>
            <form action="../auth/login.php" method = 'post'>
                <div class = 'form-elem'><input type="text" name = 'username' placeholder="username"></div>
                <div class = 'form-elem'><input type="text" name = 'password' placeholder="password"></div>    
                <div class = 'form-elem'><input type="submit" value="submit"></div>
            </form>
        </div>
    </div>    
</body>