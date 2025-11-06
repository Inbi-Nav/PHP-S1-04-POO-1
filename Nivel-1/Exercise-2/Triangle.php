<?php
require_once 'Shape.php';

class Triangle extends Shape {
    public function calculateArea() {
        return ($this->width * $this->height) / 2;
    }
    
    public function resultArea() {
        $area = $this->calculateArea();
        echo "Triangle area = base: {$this->width}, height: {$this->height} is: " . $area . "<br>";
    }
}
?>