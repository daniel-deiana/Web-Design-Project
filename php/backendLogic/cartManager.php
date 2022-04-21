
<?php

    require_once 'queryManager.php';

    class medCart {

        // array che contiene gli elementi del carrello
        public $cartList = [];

        // inserisce un nuovo elemento nel carrello
        public function insert($cartItem) {
            array_push($this->cartList,$cartItem);
            return true;
        }

        public function update($name,$type) {

            // aggiorna il carello secondo i parametri passati in ingresso
            for($i = 0; $i < count($this->cartList); $i++) {
                if ($this->cartList[$i]['name'] == $name) {
                    // nel carrelo era presente questo elemento, eseguo modifica    
                    $this->cartList[$i]['quantity'] += $type;
                    return true;     
                }
            }
        return false;
        }    

        public function book() {
            for ($i = 0; $i < count($this->cartList); $i++) {
                putMed($this->cartList[$i]['name'], $this->cartList[$i]['quantity'], $_SESSION['username']);
            }
            return true;
        }   

    }
?>