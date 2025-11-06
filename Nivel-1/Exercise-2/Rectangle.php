<?php
require_once 'Shape.php';

class Rectangle extends Shape {
    public function calculateArea() {
        return $this->width * $this->height;
    }
    
    public function resultArea() {
        $area = $this->calculateArea();
        echo "Rectangle area = width: {$this->width}, height: {$this->height} is: " . $area . "<br>";
    }
}
?>