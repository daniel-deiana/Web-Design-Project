<?php

    // PAGINA DOVE UN UTENTE PUO INSERIRE UNA REVIEW RELATIVAMENTE AD UN FARMACO

    require_once './../inc/errorConst.php';
    session_start();

    check_login();
    check_privilege('cliente');

?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $_GET['medName']; ?></title>
    <link rel='stylesheet' href='./../../css/global.css'>
    <script src='./../../js/showMedDetail.js'></script>

</head>

<body>
    <div id='container-page'>
        <?php require './../templates/navbar.php' ?>
        <div id='container-main'>
            <?php require './../templates/medDetails.php' ?>
            <div class='container-form'>
                <form action='./../backendLogic/putReview.php' method='post' id='login'>
                    <?php
                        // mi salvo in sezione il nome del farmaco per passarlo alla pagina che dovra effettuare l'inserimento 
                        $_SESSION['med'] = $_GET['medName'] 
                    ?>
                    <p>Lascia la tua esperienza con il farmaco</p>
                    <textarea name='reviewText' id='text-block' style=" overflow: scroll;"></textarea>
                    <input class='box-form' type='button' value="lascia la tua opinione" id='btn'>
                    <script src='./../../js/check.js'></script>
                </form>
            </div>
            <?php require './../templates/rightBar.php' ?>
        </div>
    </div>

</body>

</html>