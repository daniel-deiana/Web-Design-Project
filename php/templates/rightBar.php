<aside class='sidebar' id='sidebar-dx'>
    <?php
    session_start();


    // se non sono loggato non mostro nessun contenuto
    if (!isset($_SESSION['username']))
        exit;

    if ($_SESSION['usrtype'] == 'farmacista') {
        // renderizzo contenuto farmacisti
        echo '<a class ="sidebar-elem" href = "./../newMedPage.php"> Inserisci un nuovo medicinale</a>';
        echo '<a class ="sidebar-elem" href = "./../medStatsPage.php">Statistiche vendite</a>';
        exit;
    }

    // renderizzo contenuto utente standard
    echo '<a class ="sidebar-elem" href = "./profilePage.php">Profilo utente</a>';
    echo '<a class ="sidebar-elem" href = "./bookHistory.php">storico prenotazioni</a>';

    ?>
</aside>