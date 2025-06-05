<?php

final class Spread
{
    protected string $productName;
    protected float $weight;
    public int $shelfLifeMonths = 12;

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
}


class Jam extends Spread
{
    public int $sweetness = 5;

    public function __construct(string $productNamne, float $weight)
    {
        $this->productName = $productNamne;
        $this->weight = $weight;
    }

    public function __toString(): string
    {
        return "JAM: $this->productName ({$this->weight}g) keeps for $this->shelfLifeMonths months: sweetness $this->sweetness";
    }
}

class Honey extends Spread
{
    public bool $isManuka = false;

    public function __construct(string $productName, float $weight)
    {
        $this->productName = $productName;
        $this->weight = $weight;
    }

    private function manukaString(): string
    {
        if ($this->isManuka)
            return '(Manuka)';

        return '(NOT Manuka)';
    }

    public function __toString(): string
    {
        return "HONEY: $this->productName ({$this->weight}g) keeps for $this->shelfLifeMonths months {$this->manukaString()}";
    }
}



$obj1 = new Jam("Raspberry Conserve", 45.5);
$obj1->shelfLifeMonths = 24;
$obj2 = new Honey("Clear Honey", 90.0);
$obj2->shelfLifeMonths = 60;


print($obj1."\n");
print($obj2);
