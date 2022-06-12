<?php

    // aggiunge un nuovo medicinale al carrello

    require_once './cartManager.php';

    session_start();

    // controllo se carrello esiste
    if(isset($_SESSION['cart'])) {
        $cart = unserialize($_SESSION['cart']);
    }
    else
        $cart = new medCart();

    // struttura di un elemento all'interno dell array carrello
    $cartItem = array (
        "name" => $_GET['medName'],
        "quantity" => $_GET['quantity']
    );

    // inserisco nuovo elemento
    $result = $cart->insert($cartItem);
    
    $_SESSION['cart'] = serialize($cart);

    
    if($result == true)
        header('location: ./../pages/cartPage.php');
    else
        {
            // gestione errore inserimento carrello
            $_SESSION['err_msg'] = 'err_carrello_agg';
            header('location: ./../pages/homePage.php');
            exit;
        };
?>