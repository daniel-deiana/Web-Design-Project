<?php

    require_once './dbConnections.php';

    class medCart {

        public $cartList = [];

        // inserisce un nuovo elemento nel carrello
        function insert($cartItem) {
            array_push($this->cartList,$cartItem);
        }



    }
?>