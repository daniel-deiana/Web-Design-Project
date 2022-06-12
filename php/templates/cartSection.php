<div class='container-form'>
    <?php

    // sezione utilizzata per caricare i dati relativi al carrello dei farmaci di un utente 

    require_once './../backendLogic/cartManager.php';

    session_start();

    if (!isset($_SESSION['cart'])) {
        echo 'CARRELLO VUOTO';
    } else {
        $cart = unserialize($_SESSION['cart']);

        // carico gli elementi del carrello
        foreach ($cart->cartList as $item) {
            echo    "<div id = 'cart-bar-". $item['name']. "' class = 'cart-bar'>" .
                "<div class = 'cart-elem'>" . "farmaco:" . $item['name'] . "</div>" .
                "<div id = 'qt-" . $item['name'] . "' class = 'cart-elem'>" . "" . $item['quantity'] . "</div>" .
                "<a class = 'button-cart' onclick = updateCart('" . $item['name'] . "',1)  >+</a>" .
                "<a class = 'button-cart' onclick = updateCart('" . $item['name'] . "',-1) >-</a>" .
                "</div>";
        }

        // se non vi sono elementi stampo carrello vuoto
        if(count($cart->cartList) > 0)
            echo "<a class = 'text-tag' id = 'prenota' style = 'background-color: #77dd81;' href = './../backendLogic/putMed.php' >prenota</a>";
        else
            echo 'CARRELLO VUOTO';
        }
    
    ?>
</div>