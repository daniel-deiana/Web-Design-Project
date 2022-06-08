<aside class='sidebar' id='sidebar-dx'>
    <?php
    session_start();


    // se non sono loggato non mostro nessun contenuto
    if (!isset($_SESSION['username']))
        exit;

    if ($_SESSION['usrtype'] == 'farmacista') {
        // renderizzo contenuto farmacisti
        echo '<a class ="sidebar-elem" href = "./../pages/newMedPage.php"> Inserisci un nuovo medicinale</a>';
        echo '<a class ="sidebar-elem" href = "./../pages/bookHandlerPage.php">Gestione stato prenotazioni</a>';
        exit;
    }

    // renderizzo contenuto utente standard
    echo '<a class ="sidebar-elem" href = "./bookHistory.php">storico prenotazioni</a>';

    ?>
</aside>