<?php

abstract class Family
{
    public $peopleCount = 3;
    public $momsEyeColor = "Mom's eye color";
    public $dadThinking = "Dad's thinking";
    abstract public function getName();

    public function getAge()
    {
        echo $this->age;
    }
}

interface SingsFather
{
    public function goJob();
    public function getStatus();
}

interface SingsMother extends SingsFather
{
    public function cookDinner();
}

interface SingsSon
{
    public function goScholl();
    public function getSex();
}

class Father extends Family implements SingsFather
{
    public $name = "John";
    public $age = 39;
    public $status = "Husband";

    public function getName()
    {
        echo $this->name;
    }

    public function goJob()
    {
        echo "Dad goes to work";
    }

    public function getStatus()
    {
        echo $this->status;
    }
}

class Mother extends Family implements SingsMother
{
    public $age = 36;
    public $name = "Alice";
    public $status = "Wife";

    public function getName()
    {
        echo $this->name;
    }

    public function goJob()
    {
        echo "Mom goes to work";
    }

    public function cookDinner()
    {
        echo "Mom is cooking dinner";
    }

    public function getStatus()
    {
        echo $this->status;
    }
}


class Son extends Family implements SingsSon
{
    public $age = 9;
    public $name = "Adrian";
    public $gender = "Male";

    public function getName()
    {
        echo $this->name;
    }

    public function goScholl()
    {
        echo "son goes to school";
    }

    public function getSex()
    {
        echo $this->gender;
    }
}


// $fath = new Father();
// $fath->goJob();
$moth = new Son();
echo $moth->getSex();
