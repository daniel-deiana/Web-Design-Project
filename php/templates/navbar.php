<header id='container-navbar'>
    <h1>WebPharma, farmacia smart</h1>
    <?php

    session_start();
    
    if (!isset($_SESSION['username']))
    { 
        // render non logged user content  
        echo "<a href = '../pages/loginPage.php'>login</a>";
        echo "<a href = '../pages/signupPage.php'>signup</a>";
    }
    else
        echo "<a href = './../auth/logout.php'>logout</a>";

    ?>
</header>