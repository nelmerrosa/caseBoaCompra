<?php
require "autoload.php";

class BoaLog extends Transport {
    
    const NAME = "BoaLog";
    const FIX_VALUE = 4.30;
    const KM_KG_VALUE = 0.12;

    public function mathCost($distance, $weight) {
        $result = $this->getFixValue() + ($weight * $distance * $this->getKmKgValue());
        return $result;
    }

    function __construct(){
        parent::__construct(self::NAME, self::FIX_VALUE, self::KM_KG_VALUE);
    }
}
