
<div class='container-form'>
    <?php

    require_once './../backendLogic/cartManager.php';

    session_start();

    if (!isset($_SESSION['cart'])) {
        echo 'SEZIONE NON DISPONIBILE PER UTENTI NON LOGGATI';
        exit;
    }
    
    $cart = unserialize($_SESSION['cart']);

    foreach($cart->cartList as $item) {
        echo $item['name'];
        
    }

    ?>
</div>