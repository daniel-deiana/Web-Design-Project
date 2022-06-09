<!DOCTYPE html>
<html>

<head>
    <title>WebPharma</title>
    <link rel='stylesheet' href='./../../css/global.css'>
    </link>
    <script src='./../../js/showMeds.js'></script>
</head>

<body>
    <div id='container-page'>
        <?php require './../templates/navbar.php' ?>
        <div id='container-main'>
            <?php require './../templates/leftBar.php' ?>
            <?php
            if (isset($_SESSION['username']))
                require './../templates/medSection.php';
            else if (isset($_SESSION['err_msg']))
                require './../templates/errorSection.php';
            ?>
            <?php require './../templates/rightBar.php' ?>
        </div>
        <?php require './../templates/footer.php' ?>
    </div>
</body>

</html>