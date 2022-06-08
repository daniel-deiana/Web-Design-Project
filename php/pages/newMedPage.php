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

            <div id='container-review'>
                <input name = 'nome' type='text'>Nome</input>
                <h5>descrizione</h5>
                <textarea name="descrizione" id="descrizione" style = 'overflow: scroll'></textarea>
                <input name = 'immagine' type = 'file'>Immagine prodotto</input>
                <input name = 'prezzo' type = 'text'>prezzo al pubblico</input>
            </div>

            <?php require './../templates/rightBar.php' ?>
        </div>
        <?php require './../templates/footer.php' ?>
    </div>
</body>

</html>