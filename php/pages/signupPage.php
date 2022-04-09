<!DOCTYPE html>
<html>

<head>
    <title>signup</title>
    <link rel='stylesheet' href='./../../css/global.css'>
</head>

<body>
    <div id='container-page'>
        <?php require './../templates/navbar.php' ?>
        <div id='container-main'>
            <?php require './../templates/leftBar.php' ?>
            <div class='container-form'>
                <form action="./../auth/signup.php" method='post' id='signup'>
                    <p>Username</p>
                    <input type='text' placeholder='username' name='username'>
                    <p>e-mail</p>
                    <input type='text' placeholder='e-mail' name='email'>
                    <p>telefono</p>
                    <input type='text' placeholder='telefono' name='telefono'>
                    <p>Password</p>
                    <input type='password' placeholder='Password' name='password'>
                    <p>Verifica Password</p>
                    <input type='password' placeholder='Verifica Password' name='checkPassword'>
                    <input type='submit' name='registrati'>
                </form>
            </div>
            <?php require './../templates/rightBar.php' ?>
        </div>
    </div>
</body>

</html>