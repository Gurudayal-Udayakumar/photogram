<?php

class Mic{
    private $brand;
    public $color;
    public $usb_port;  
    public $model;
    public $light;
    public $price;


    public static function testFunction(){
        print("this is a test function and it can be called without creating an object 
        using :: symbol,there is no construction and destruction for this function");
    }


    public function __construct($brand){
        print("constructing....");
        $this->brand = ucwords($brand);
    }
    public function setLight($light){
        print($this->light);
        print($light);
        }

    public function getModel(){
        return $this->model;
    }

    public function setModel($model){
        $this->model = ucwords($model);
    }

    public function __destruct(){
        print("destructing...");
    }
}