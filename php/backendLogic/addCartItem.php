<?php

    require_once './cartManager.php';

    session_start();

    $cart = new medCart();

    $medName = $_GET['medName'];
    $medQuantity = $_GET['quantity'];

    $cartItem = array (
        "name" => $medName,
        "quantity" => $medQuantity
    );

    $cart->insert($cartItem);
    
?>