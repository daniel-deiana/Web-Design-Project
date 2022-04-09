<!DOCTYPE html>
<html>

<head>
    <title>WebPharma</title>
    <link rel='stylesheet' href='./../../css/global.css'></link>
    <script src='./../../js/showMeds.js'></script>
</head>

<body id='container'>
    <?php require './../templates/navbar.php' ?>
    <div id='container-med'>
        <script>requestMeds(0);</script>
    </div>
</body>

</html>