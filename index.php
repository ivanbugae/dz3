<?php
spl_autoload_register(function($class){
    $paths = ['class/','interface/'];
    foreach ($paths as $path){
        if(file_exists($path.$class.'.php')){
            include $path.$class.'.php';
        }
    }
});
$engine = new Engine();
$car = new Car($engine);

$car->start();
$car->up();
$car->stop();

