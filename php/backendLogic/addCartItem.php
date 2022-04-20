<?php

    // aggiunge un nuovo medicinale al carrello

    require_once './cartManager.php';

    session_start();

    $cart = new medCart();

    $cartItem = array (
        "name" => $_GET['medName'],
        "quantity" => $_GET['quantity']
    );

    $cart->insert($cartItem);
    $_SESSION['cart'] = serialize($cart);

    
?>