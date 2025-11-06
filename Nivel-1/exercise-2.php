<h1>Exercise 2 - Shapes Area</h1>
<?php
require_once 'Triangle.php';
require_once 'Rectangle.php';
$triangle = new Triangle(18, 13);
$rectangle = new Rectangle(12, 41);
$triangle->resultArea();
$rectangle->resultArea();
?>