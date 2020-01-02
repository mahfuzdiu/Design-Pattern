<?php


interface Product
{
    public function buy();
}

Class Monitor implements Product
{
    public function buy()
    {
        echo 'buy a monitor...';
    }
}

Class Gpu implements Product
{
    public function buy()
    {
        echo 'buy a gpu...';
    }
}


// the most important thing here is we are not returning the objects from facade class to user class like the factory class
// this is the difference between factory and facade

Class Facade
{
    public $monitor;
    public $gpu;

    public function __construct()
    {
        $this->monitor = new Monitor();
        $this->gpu = new Gpu();
    }


    public function buyMonitor()
    {
        $this->monitor->buy();
    }


    public function buyGpu()
    {
        $this->gpu->buy();
    }

}


Class User
{
    public function letsBuy()
    {
        $factory = new Facade();

        $factory->buyMonitor();
        $factory->buyGpu();
    }
}

$obj = new User();
$obj->letsBuy();