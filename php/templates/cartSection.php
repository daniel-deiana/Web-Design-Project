<div class='container-form'>
    <?php

    require_once './../backendLogic/cartManager.php';

    session_start();

    if (!isset($_SESSION['cart'])) {
        echo 'carrello vuoto';
    } else {
        $cart = unserialize($_SESSION['cart']);

        foreach ($cart->cartList as $item) {
            echo    "<div class = 'cart-bar'>" .
                "<div class = 'cart-elem'>" . "farmaco:" . $item['name'] . "</div>" .
                "<div id = 'qt-" . $item['name'] . "' class = 'cart-elem'>" . "" . $item['quantity'] . "</div>" .
                "<a class = 'button-cart' onclick = updateCart('" . $item['name'] . "',1)  >+</a>" .
                "<a class = 'button-cart' onclick = updateCart('" . $item['name'] . "',-1) >-</a>" .
                "</div>";
        }

        echo "<a class = 'text-tag' style = 'background-color: #77dd81;' href = './../backendLogic/putMed.php' >prenota</a>";
    }
    
    ?>
</div>