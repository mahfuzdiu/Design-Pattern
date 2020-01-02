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



// subclasses are responsible to create the instance of the class
// In simple word instance of a class will be made (based on condition, individually) given by user and the intence of the class will be returned
// so user have the access of Monitor , Gpu instances

// again the most important thing here is we are returning the objects from factory to user class

Class Factory
{
    //this way
    public function buyProduct($productName)
    {
        if($productName == 'monitor')
        {
            return new Monitor();
        }


        if($productName == 'monitor')
        {
            return new Gpu();
        }
    }


    //or this way

    public function buyMonitor()
    {
        return new Monitor();
    }



    public function buyGpu()
    {
        return new Gpu();
    }

}


Class User
{
    public function letsBuy()
    {
        $factory = new Factory();
        $monitor = $factory->buyMonitor();

        //using monitor object
        $monitor->buy();
    }
}

$obj = new User();
$obj->letsBuy();