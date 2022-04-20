<?php

    class medCart {

        // array che contiene gli elementi del carrello
        public $cartList = [];

        // inserisce un nuovo elemento nel carrello
        public function insert($cartItem) {
            array_push($this->cartList,$cartItem);
        }
    }
?>