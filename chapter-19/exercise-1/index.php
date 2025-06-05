<?php
//exercise-1
    class Jam {
        public $productName, $weight;
        private $shelfLifeMonths = 24, $sweetness = 5;

        function __construct(string $productName, float $weight)
        {
            $this->productName = $productName;
            $this->weight = $weight;
        }

        function __toString()
        {
            return "JAM : $this->productName ($this->weight) keeps for $this->shelfLifeMonths months : sweetness $this->sweetness";
        }
    }


    $food1 = new Jam("Raspberry Conserve", 45.5);
    print($food1->__toString());

?>