<aside class='sidebar' id='sidebar-dx'>
    <?php
    session_start();

    if (!isset($_SESSION['username']))
        exit;

    if ($_SESSION['usrtype'] == 'farmacista') {
        // renderizzo contenuto farmacisti
        echo '<a class ="sidebar-elem" href = "./../newMedPage.php"> Inserisci un nuovo medicinale</a>';
        echo '<a class ="sidebar-elem" href = "./../medStatsPage.php">Statistiche vendite</a>';
        exit;
    }


    echo '<a class ="sidebar-elem" href = "./../profilePage.php">Profilo utente</a>';
    echo '<a class ="sidebar-elem" href = "./../bookedPage.php">storico prenotazioni</a>';


    ?>
</aside>