
<?php

    require_once 'queryManager.php';

    class medCart {

        // array che contiene gli elementi del carrello
        public $cartList = [];

        // inserisce un nuovo elemento nel carrello
        public function insert($cartItem) {

            foreach($this->cartList as $elem)
            {
                if($elem['name'] == $cartItem['name'])
                    return false;
            }

            array_push($this->cartList,$cartItem);
            return true;
        }

        // aggiorna il carrello
        public function update($name,$type) {

            // aggiorna il carello secondo i parametri passati in ingresso
            for($i = 0; $i < count($this->cartList); $i++) {
                if ($this->cartList[$i]['name'] == $name) {
                    // nel carrelo era presente questo elemento, eseguo modifica    
                    $this->cartList[$i]['quantity'] += $type;
                    
                    if($this->cartList[$i]['quantity'] == 0)
                        {
                            unset($this->cartList[$i]);
                        }

                    if ($this->cartList[$i]['quantity'] > 3)
                        $this->cartList[$i]['quantity'] = 3;
                
                    return true;     
                }
            }
        return false;
        }    

        // prenota gli elementi del carrello
        public function book() {

            if(count($this->cartList) == 0)
                return false;

            for ($i = 0; $i < count($this->cartList); $i++) {
                putMed($this->cartList[$i]['name'], $this->cartList[$i]['quantity'], $_SESSION['username']);
            }
            return true;
        }   

    }
?>