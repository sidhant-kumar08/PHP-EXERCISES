<?php

namespace Mattsmithdev;

class Dessert
{
    private string $name;
    private DietType $diet;

    public function __toString()
    {
        return "(DESSERT) $this->name ({$this->diet->name} dish)";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getDiet(): DietType
    {
        return $this->diet;
    }

    public function setDiet(DietType $diet)
    {
        $this->diet = $diet;
    }
}
