<?php


class Product
{
    private $name, $price;

    function __construct($name, $price)
    {

        if ($name < 0) {
            throw new \InvalidArgumentException("Invalid Argument passed");
        } else if ($price > 1000000) {
            throw new Exception("Invalid price");
        } else if (strlen($name) == 0) {
            throw new \InvalidArgumentException("Invalid Name provided");
        } else {
            $this->setName($name);
            $this->setPrice($price);
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
