<!DOCTYPE html>
<html>

<head>
    <title>WebPharma</title>
    <link rel='stylesheet' href='./../../css/global.css'>
    </link>
</head>

<body>
    <div id='container-page'>
        <?php require './../templates/navbar.php' ?>
        <div id='container-main'>
            <?php require './../templates/leftBar.php' ?>
            <div class='container-form'>
                <form action="./../backendLogic/updateBook.php" method='post' id='newmed' enctype="multipart/form-data">
                    <p>cerca prenotazioni</p>
                    <input type='text' class='box-form' id='book-search' name = 'codice'>
                    <script src='./../../js/bookHandler.js'></script>
                    <input type='submit' class='box-form' name='inserisci nuovo medicinale' id='submit'>
                    <div id='container-book'>
                    </div>
                </form>
            </div>

            <?php require './../templates/rightBar.php' ?>
        </div>
        <?php require './../templates/footer.php' ?>
    </div>
</body>

</html>