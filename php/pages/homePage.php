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

            // Nella pagina di homepage vengono caricate dei contenuti diversi in base alla situazione
            // 1 - Se non sono loggato viene caricato il manuale del sito
            // 2 - Se durante l'utilizzo del sito mi viene ritornato un errore allora carico il messaggio di errore
            // 3 - carico la sezione contenente il catalogo dei prodotti

            if (isset($_SESSION['err_msg']))
                require './../templates/errorSection.php';
            else if (isset($_SESSION['username']))
                require './../templates/medSection.php';
            else
                require './../templates/descrizione.php';
            ?>
            <?php require './../templates/rightBar.php' ?>
        </div>
    </div>
</body>

</html>