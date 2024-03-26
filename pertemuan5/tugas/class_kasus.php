<?php

class Fruit {
    public $fruitName;
    public $color;
    public $quantity;

    public function __construct($fruitName, $color, $quantity) {
        $this->fruitName = $fruitName;
        $this->color = $color;
        $this->quantity = $quantity;
    }

    public function getInfo() {
        echo "Nama Buah: " . $this->fruitName . "<br>";
        echo "Warna Buah: " . $this->color . "<br>";
        echo "Jumlah Buah: " . $this->quantity . "<br>";
    }
}

class Apple extends Fruit {
   
}

class Orange extends Fruit {
    
}

?>
