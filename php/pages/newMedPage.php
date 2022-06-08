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
            <div class='container-form'>
                <form action="./../backendLogic/putNewMed.php" method='post' id='newmed' enctype="multipart/form-data">
                    <p>Nome</p>
                    <input type='text' class='box-form' placeholder='nome' name='nome'>
                    <p>descrizione</p>
                    <textarea class='box-form' placeholder='descrizione' name='descrizione'></textarea>
                    <p>prezzo</p>
                    <input type='text' class='box-form' placeholder='prezzo' name='prezzo'>
                    <p>immagine</p>
                    <input type='file' class='box-form' name='img' accept="image/*">
                    <input type='submit' class='box-form' name='inserisci nuovo medicinale' id='submit'>
                </form>
            </div>
            <?php require './../templates/rightBar.php' ?>
        </div>
        <?php require './../templates/footer.php' ?>
    </div>
</body>

</html>