<?php

abstract class Machine
{
    abstract function refuel(int $liters);
    public function startEngine()
    {
        echo "The engine started";
    }
}

interface FunctionMachine
{
    public function goAhead();
    public function goBack();
    public function funcMachine();
}

interface FuncAuto
{
    public function honk();
    public function turnWipers();
    public function individual();
}


class Tank extends Machine implements FunctionMachine
{
    public $typeMachine = "Танк";
    public $fuel = 10;


    function goAhead()
    {
        echo $this->typeMachine . " едет вперед";
    }

    function goBack()
    {
        echo $this->typeMachine . " едет назад";
    }

    public function funcMachine()
    {
        echo $this->typeMachine . " выстрелил";
    }

    function refuel(int $liters)
    {
        $this->fuel += $liters;
    }

    public function getFuel()
    {
        echo "В баке машины " . $this->typeMachine . " " . $this->fuel . " литров топлива";
    }
}


class Tractor extends Machine implements FunctionMachine
{
    public $typeMachine = "Трактор";
    public $fuel = 10;

    function goAhead()
    {
        echo $this->typeMachine . " едет вперед";
    }

    function goBack()
    {
        echo $this->typeMachine . " едет назад";
    }

    public function funcMachine()
    {
        echo $this->typeMachine . " начал копать ковшом траншею";
    }

    function refuel(int $liters)
    {
        $this->fuel += $liters;
    }

    public function getFuel()
    {
        echo "В баке машины " . $this->typeMachine . " " . $this->fuel . " литров топлива";
    }
}

class BmwM5 extends Machine implements FunctionMachine, FuncAuto
{
    public $typeMachine = "BMW M5";
    public $individualCharacter = "Кованные колесные диски, спортивные сиденья Recaro";
    public $fuel = 10;

    function goAhead()
    {
        echo $this->typeMachine . " едет вперед";
    }

    function goBack()
    {
        echo $this->typeMachine . " едет назад";
    }

    public function funcMachine()
    {
        echo $this->typeMachine . " включает закись азота и разгоняется до максимальной скорости";
    }

    public function individualHaracter()
    {
        echo "Кованные колесные диски R21, обивка салона алькантарой и стильная аэрография";
    }

    public function honk()
    {
        echo $this->typeMachine . " сигналит";
    }
    public function turnWipers()
    {
        echo $this->typeMachine . " включил дворники";
    }

    public function individual()
    {
        echo $this->individualCharacter;
    }

    function refuel(int $liters)
    {
        $this->fuel += $liters;
    }

    public function getFuel()
    {
        echo "В баке машины " . $this->typeMachine . " " . $this->fuel . " литров топлива";
    }
}

class AdditionalFeatures
{
    public function runFunction(FunctionMachine $class)
    {
        $class->goAhead();
        echo "<br>";
        $class->funcMachine();
    }
}


$addFeat = new AdditionalFeatures;

// $tank = new Tank;
// $addFeat->runFunction($tank);

$bmw = new BmwM5;
$addFeat->runFunction($bmw);
echo "<br>";
$bmw->honk();
echo "<br>";
$bmw->turnWipers();
echo "<br>";
$bmw->individual();
$bmw->refuel(15);
echo "<br>";
$bmw->getFuel();

// $tract = new Tractor;
// $addFeat->runFunction($tract);
