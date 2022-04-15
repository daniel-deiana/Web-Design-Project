<header id='container-navbar'>
    <a href='./../pages/homePage.php'>
        <p id='nav-title'>WebPharma</p>
    </a>
    <div id='cont-buttons'>
        <?php

        session_start();

        // carico contenuti diversi in base al fatto che l'utente sia loggato o no 

        if (!isset($_SESSION['username'])) {
            echo "<a class = 'navbar-elem' href = './loginPage.php'>login</a>";
            echo "<a class = 'navbar-elem' href = './signupPage.php'>signup</a>";
        } else {
            echo '<p>Ciao,'.$_SESSION['username'].'</p>';
            echo "<a class = 'navbar-elem' href = './../auth/logout.php'>logout</a>";
        }
        ?>
    </div>
</header>