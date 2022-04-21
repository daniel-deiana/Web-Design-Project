<?php

    // aggiunge un nuovo medicinale al carrello

    require_once './cartManager.php';

    session_start();

    if(isset($_SESSION['cart'])) {
        $cart = unserialize($_SESSION['cart']);
    }
    else
        $cart = new medCart();

    $cartItem = array (
        "name" => $_GET['medName'],
        "quantity" => $_GET['quantity']
    );

    $result = $cart->insert($cartItem);
    
    $_SESSION['cart'] = serialize($cart);

    if($result)
        header('location: ./../pages/cartPage.php');
    else
        echo 'ERRORE CARRELLO';
?>