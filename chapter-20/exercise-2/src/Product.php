<?php


    namespace Mattsmithdev;


    class Product {

        private $id, $description, $price;


        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }



        public function setDescription($description){
            $this->description = $description;
        }

        public function getDescriptionn(){
            return $this->description;
        }



        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }

    }
?>