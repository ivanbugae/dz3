<?php

class Vehicle implements MovableInterface
{
    public $vehicle_type;
    public static $wheelsCount = 1;
    protected $actionList = ['Stop','Start','SpeedUp','SpeedDown'];

    //Методы переопределяються в дочерних классах

    public function start()
    {
        echo $this->actionList[1] . PHP_EOL;
        return $this->actionList[1];
    }

    public function stop()
    {
        echo $this->actionList[0] . PHP_EOL;
        return $this->actionList[0];
    }

    public function up()
    {
        echo $this->actionList[2] . PHP_EOL;
        return $this->actionList[2];
    }

    public function down()
    {
        echo $this->actionList[3] . PHP_EOL;
        return $this->actionList[3];
    }
}