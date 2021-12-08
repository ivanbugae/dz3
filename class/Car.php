<?php

class Car extends Vehicle
{
    protected $model;
    const MAX_SPEED = 240;
    protected $year;
    public $engine;
    public $transmission;
    protected $currentSpeed;
    public static $wheelsCount = 4;
    public function __construct(Engine $engine, Transmission $transmission)
    {
        $this->vehicle_type = 'Car';
        $this->model = "Rolls Royce";
        $this->year = '2021';
        $this->currentSpeed = 0;
        $this->engine = $engine; //Агрегация
        $this->transmission = $transmission;
    }
    public function start()
    {
        echo $this->engine->start();
    }
    public function stop()
    {
        echo $this->engine->stop();
    }
    public function up()
    {
        if($this->engine->statement == 1){
            if(($this->currentSpeed + 50) < self::MAX_SPEED){
                $this->currentSpeed += 50;
                echo "Current speed: ". $this->currentSpeed . PHP_EOL;
                echo $this->transmission->gearSwitchUp($this->currentSpeed);
            }
            else{
                $this->currentSpeed = self::MAX_SPEED;
                echo "You reached max speed: ". $this->currentSpeed . PHP_EOL;
            }
            return $this->currentSpeed;
        }
        else {
            echo "Engine is not start!" . PHP_EOL;
            exit();
        }
    }
    public function down()
    {
        if(($this->currentSpeed - 50) > 0){
            $this->currentSpeed -= 50;
            echo "Current speed: ". $this->currentSpeed . PHP_EOL;
            echo $this->transmission->gearSwitchDown($this->currentSpeed);
        }
        else{
            $this->currentSpeed = 0;
            echo "You are stop!" . PHP_EOL;
        }
        return $this->currentSpeed;
    }
}