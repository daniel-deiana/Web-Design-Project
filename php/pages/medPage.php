<?php require_once './../backendLogic/cartManager.php' ?>
<?php session_start();

if (!$_SESSION['username']) {
    // non posso accedere a questa pagina se non sono loggato
    echo 'ACCESSO VIETATO AD UTENTI NON LOGGATI';
    exit;
}
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
            <?php // require './../templates/leftBar.php' 
            ?>
            <?php require './../templates/reviewSection.php'; ?>
            <?php require './../templates/medDetails.php' ?>
            <?php require './../templates/rightBar.php' ?>
        </div>
        <?php require './../templates/footer.php' ?>
    </div>
</body>

</html>