
<?php

            require_once './../inc/errorConst.php';
            session_start();

            check_login();
            check_privilege('cliente');

?>
<!DOCTYPE html>
<html>

<head>
    <title>WebPharma</title>
    <link rel='stylesheet' href='./../../css/global.css'>
    </link>
    <script src='./../../js/showBookHistory.js'></script>
</head>

<body>
    <div id='container-page'>
        <?php require './../templates/navbar.php' ?>
        <div id='container-main'>
            <?php require './../templates/leftBar.php' ?>
            <?php require './../templates/history.php' ?>
            <div class='container-form' id='container-history'></div>
            <script>
                requestBookHistory()
            </script>
            <?php require './../templates/rightBar.php' ?>
        </div>

    </div>

</body>

</html>