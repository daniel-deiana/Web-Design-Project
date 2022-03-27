<header id='container-navbar'>
    <h1>WebPharma, farmacia smart</h1>
    <?php
    if (!isset($_SESSION['username']))
        echo "<a href = '../pages/loginPage.php'>login</a>";
        echo "<a href = '../pages/signupPage.php'>signup</a>";
    ?>
</header>