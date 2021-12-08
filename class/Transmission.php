<?php

class Transmission
{
    public $gearsNumbers;
    public $currentGear = 0;
    public $switchTrigger = [];
    public function __construct()
    {
        $this->gearsNumbers = 5;
        for ($i = 0; $i <= $this->gearsNumbers; $i++ ){
            array_push($this->switchTrigger, $i*50);
        }
    }
    public function gearSwitchUp($currentSpeed){
        if(($this->currentGear + 1) < $this->gearsNumbers && ($currentSpeed >= $this->switchTrigger[$this->currentGear])){
            $this->currentGear++;
            return 'Gear: '.$this->currentGear . PHP_EOL;
        }
        else{
            return "Max gear reached" . PHP_EOL;
        }
    }
    public function gearSwitchDown($currentSpeed){
        if(($this->currentGear - 1) > 0  && ($currentSpeed < $this->switchTrigger[$this->currentGear])){
            $this->currentGear--;
            return 'Gear: '.$this->currentGear . PHP_EOL;
        }
        else{
            return "Neutral" . PHP_EOL;
        }
    }
}