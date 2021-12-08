<?php

class Engine
{
    public $statement = 0;
    public function start(){
        if(!$this->statement){
            $this->statement = 1;
            return "Engine start!" . PHP_EOL;
        }
        else{
            return "Engine already started!" . PHP_EOL;
        }
    }
    public function stop(){
        if($this->statement){
            $this->statement = 0;
            return "Engine stop!" . PHP_EOL;
        }
        else{
            return "Engine already stop!" . PHP_EOL;
        }
    }
}