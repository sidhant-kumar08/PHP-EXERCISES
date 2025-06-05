<?php

    abstract class Vehicle {
        public int $numDoors;
        public string $fuel;
    }


    class Car extends Vehicle{
        public int $numSeats;
        public float $roadTax;

        function __construct(int $numDoors, string $fuel, int $numSeats, float $roadTax)
        {
            $this->numDoors = $numDoors;
            $this->fuel = $fuel;
            $this->numSeats = $numSeats;
            $this->roadTax = $roadTax;
        }


        function __toString()
        {
            return "$this->numDoors, $this->fuel, $this->numSeats, $this->roadTax";
        }
    }


    class Van extends Vehicle{
        public bool $commercialTax;

        function __construct(int $numDoors, string $fuel, bool $commercialTax)
        {
            $this->numDoors = $numDoors;
            $this->fuel = $fuel;
            $this->commercialTax = $commercialTax;
        }

        function __toString()
        {
            return "$this->numDoors, $this->fuel, $this->commercialTax";
        }
    }





    $obj1 = new Car(4,"55ltr",5,25.0);
    print($obj1->__toString() . "\n");

    $obj2 = new Van(4,"23ltr",false);
    print($obj2->__toString());

?>