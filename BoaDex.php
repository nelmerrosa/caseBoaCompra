<?php
require "autoload.php";

class BoaDex extends Transport {
    
    const NAME = "BoaDex";
    const FIX_VALUE = 10.0;
    const KM_KG_VALUE = 0.05;

    public function mathCost($distance, $height) {
        $result = $this->getFixValue() + ($height * $distance * $this->getKmKgValue());
        return $result;
    }

    function __construct(){
        parent::__construct(self::NAME, self::FIX_VALUE, self::KM_KG_VALUE);
    }
}