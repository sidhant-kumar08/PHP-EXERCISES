<?php

namespace Mattsmithdev;

class Staff {
    public $name, $jobTitle;


    function __construct($name, $jobTitle)
    {
        $this->name = $name;
        $this->jobTitle = $jobTitle;
    }


    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }



    function setJobTitle($jobTitle){
        $this->jobTitle = $jobTitle;
    }

    function getJobTitle(){
        return $this->jobTitle;
    }
}