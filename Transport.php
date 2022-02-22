
<?php
require "autoload.php";

abstract class Transport {
    private $name;
    private $fixValue;
    private $kmKgValue;

    function __construct($name, $fixValue, $kmKgValue){
        $this->name = $name;
        $this->fixValue = $fixValue;
        $this->kmKgValue = $kmKgValue;
    }

    public static function Transports(){
        return[
            new Transboa(),
            new BoaDex(),
            new BoaLog(),
        ];
    }

    public function getName(){
        return $this->name;
    }

    public function getFixValue(){
        return $this->fixValue;
    }

    public function getKmKgValue(){
        return $this->kmKgValue;
    }

    public function changeFixValue($value) {
        $this->fixValue = $value;
    }

    public function changeKmKgValue($value) {
        $this->kmKgValue = $value;
    }
    
    abstract public function mathCost($distance, $height); 
};