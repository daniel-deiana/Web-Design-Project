<?php


    // aggiunge un nuovo medicinale al carrello

    require_once './cartManager.php';

    session_start();

    if (!isset($_SESSION['username'])) {
    // se un utente prova ad accedervi quando non è loggato ho un errore
        $_SESSION['err_msg'] = 'err_permessi';
        header('location: ./../pages/homePage.php');
        exit;
    }

    // aggiorno lo stato del carrello
    $cart = unserialize($_SESSION['cart']);
    $cart->update($_GET['med'], $_GET['type']);
    $_SESSION['cart'] = serialize($cart);

    echo serialize($cart);
?>
