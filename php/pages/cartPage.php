<!DOCTYPE html>
<html>

<head>
    <title>WebPharma</title>
    <link rel='stylesheet' href='./../../css/global.css'>
    <script src='./../../js/updateCart.js'></script>
</head>

<body>
    <div id='container-page'>
        <?php require './../templates/navbar.php' ?>
        <div id='container-main'>
            <?php require './../templates/leftBar.php' ?>
            <?php require './../backendLogic/cartManager.php' ?>
            <?php require './../templates/cartSection.php' ?>
            <?php require './../templates/rightBar.php' ?>
        </div>
    </div>
    <?php require './../templates/footer.php' ?>
</body>

</html>