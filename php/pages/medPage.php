<?php 

    // PAGINA RELATIVA AD UN DETERMINATO FARMACO

    require_once './../backendLogic/cartManager.php';
    require_once './../inc/errorConst.php';
    session_start();

    check_login();
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $_GET['medName']; ?></title>
    <link rel='stylesheet' href='./../../css/global.css'>
    <script src='./../../js/showMedDetail.js'></script>
    <script src='./../../js/showReviews.js'></script>
</head>

<body>
    <div id='container-page'>
        <?php require './../templates/navbar.php' ?>
        <div id='container-main'>
            <?php require './../templates/leftBar.php' ?>
            <?php require './../templates/medDetails.php' ?>
            <?php require './../templates/reviewSection.php' ?>
            <?php require './../templates/rightBar.php' ?>
        </div>
    </div>
</body>

</html>