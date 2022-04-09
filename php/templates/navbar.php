<header id='container-navbar'>
    <p id = 'nav-title' >Web Pharma</p>
    <?php

    session_start();

    // carico contenuti diversi in base al fatto che l'utente sia loggato o no 

    if (!isset($_SESSION['username']))
    {   
        echo "<a class = 'navbar-elem' href = './loginPage.php'>login</a>";
        echo "<a class = 'navbar-elem' href = './signupPage.php'>signup</a>";
    }
    else
        echo "<a class = 'navbar-elem' href = './../auth/logout.php'>logout</a>";

    ?>
</header>