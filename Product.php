<?php
 require "autoload.php";

 class Product {
    private $id;
    private $name;
    private $distance;
    private $height;

    public static function product(){
        return[
            new Product (1, "Fone de Ouvido", 1, 1)
        ];
    }
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getDistance(){
        return $this->distance;
    }
    
    public function getHeight(){
        return $this->height;
    }

    function __construct($id, $name, $distance, $height){
        $this->id = $id;
        $this->name = $name;
        $this->distance = $distance;
        $this->height = $height;
    }
}
