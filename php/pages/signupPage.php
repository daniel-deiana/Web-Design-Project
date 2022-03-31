<!DOCTYPE html>
<html>

<head>
    <title>signup</title>
    <link rel='stylesheet' href='./../../css/global.css'>
</head>

<body>
    <?php require './../templates/navbar.php' ?>
    <div id='signup'>
        <form action="./../auth/signup.php" method='post' id='signup'>
            <h4>Username</h4>
            <input type='text' placeholder='username' name='username'>
            <h4>e-mail</h4>
            <input type='text' placeholder='e-mail' name='email'>
            <h4>telefono</h4>
            <input type='text' placeholder='telefono' name='email'>
            <h4>Password</h4>
            <input type='password' placeholder='Password' name='password'>
            <h4>Verifica Password</h4>
            <input type='password' placeholder='Verifica Password' name='checkPassword'>
            <input type='submit' name='registrati'>
        </form>
    </div>
</body>

</html>