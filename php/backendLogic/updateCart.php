<?php

    // aggiunge un nuovo medicinale al carrello

    require_once './cartManager.php';

    session_start();

    if(!isset($_SESSION['cart'])) {
        echo "errore";
        exit;
    }

    $cart = unserialize($_SESSION['cart']);
    $cart->update($_GET['med'], $_GET['type']);
    $_SESSION['cart'] = serialize($cart);

    echo serialize($cart);
?>
