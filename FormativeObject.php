<?php 

    class Ramen{
        private $ingredients = "Pork broth";
        private $plating = "Japanese style";
        private $price = 400;

        public function displayInfo(){
            $ramen = new Ramen();
            echo $ramen->getIngredients();
            echo $ramen->getPlating();
            echo $ramen->getPrice();

            
        }


        public function setIngredients($ingredients){
            $this->ingredients = $ingredients;
        }
        public function getIngredients(){
            return $this->ingredients;
        }
        public function setPlating($plating){
            $this->plating = $plating;
        }
        public function getPlating(){
            return $this->plating;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price;
        }

    }

    class Drinks extends Ramen{
        
    }
?>