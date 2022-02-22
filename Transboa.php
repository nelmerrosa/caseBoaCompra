<?php
require "autoload.php";

class Transboa extends Transport {
    
    const NAME = "Transboa";
    const FIX_VALUE_LESS_5_KG = 2.10;
    const FIX_VALUE_MORE_5_KG = 10.0;
    const VALUE_KM_LESS_5_KG = 1.10;
    const VALUE_KM_MORE_5_KG = 0.01;

    public function mathCost($distance, $weight) {
        if($weight > 5) {
            $this->changeFixValue(self::FIX_VALUE_MORE_5_KG);
            $this->changeKmKgValue(self::VALUE_KM_MORE_5_KG);
        } else {
            $this->changeFixValue(self::FIX_VALUE_LESS_5_KG);
            $this->changeKmKgValue(self::VALUE_KM_LESS_5_KG);
        }
        
        $result = $this->getFixValue() + ($weight * $distance * $this->getKmKgValue());
        return $result;
    }

    function __construct(){
        parent::__construct(self::NAME, self::FIX_VALUE_LESS_5_KG, self::VALUE_KM_LESS_5_KG);
    }
}
