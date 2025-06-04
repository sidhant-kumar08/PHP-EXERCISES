<?php

    class Exercise_4{
        public $age, $houseNumber, $color, $length, $heavy;


        //Age

        function setAge(int $age){
            $this->age = $age;
        } 

        function getAge(){
            return $this->age;
        }


        //House Number

        function setHouseNumber(int $houseNumber){
            $this->houseNumber = $houseNumber;
        }

        function getHouseNumber(){
            return $this->houseNumber;
        }


        //Color


        function setColor(string $color){
            $this->color = $color;
        }

        function getColor(){
            return $this->color;
        }


        //Length

        function setLength(float $length){
            $this->length = $length;
        }

        function getLength(){
            return $this->length;
        }


        //Heavy

        function setHeavy(bool $isHeavy){
            $this->heavy = $isHeavy;
        }

        function getHeavy(){
            return $this->heavy;
        }
    }

?>