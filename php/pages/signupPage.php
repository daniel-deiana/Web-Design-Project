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
                    <input type='text' class='box-form' placeholder='username' name='username'>
                    <p>e-mail</p>
                    <input type='text' class='box-form' placeholder='e-mail' name='email'>
                    <p>telefono</p>
                    <input type='text' class='box-form' placeholder='telefono' name='telefono'>
                    <p>Codice Fiscale</p>
                    <input type='text' class='box-form' placeholder='codice fiscale' name='codfiscale'>
                    <p>Password</p>
                    <input type='password' class='box-form' placeholder='Password' name='password'>
                    <p>Verifica Password</p>
                    <input type='password' class='box-form' placeholder='Verifica Password' name='checkPassword'>
                    <input type='submit' name='registrati' id='submit'>
                </form>
            </div>
            <?php require './../templates/rightBar.php'; ?>
        </div>
    </div>

    <script src='./../../js/checkSignup.js'></script>
</body>

</html>