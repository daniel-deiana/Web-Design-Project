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
                    require './../templates/medSection.php'
            
            ?>
            <?php require './../templates/rightBar.php' ?>
        </div>
    </div>
</body>

</html>