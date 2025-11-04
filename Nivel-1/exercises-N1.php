<h1 style="color: darkblue;"> Exercise 1</h1>
<?php
Class Employee {
    public $name;
    public $salary;

    function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;

    }

    function calculateTax(){

    if ($this->salary > 6000) {
        echo "{$this->name} has to pay taxes !";
        } 
        else 
        {
        echo "{$this->name} doesn't have to pay taxes";
        }

    }
}
$Joan = new Employee("Joan", 5999);
$Joan-> calculateTax();

echo "<br>";

$Maria = new Employee("Maria", 7500);
$Maria->calculateTax();  
?>

<h1 style="color: darkblue;"> Exercise 1</h1>
<?php
Class Shape {
    protected $width;
    protected $height;

    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}
class Triangle extends Shape {
    function calculateArea() {
        $area = ($this->width * $this->height) / 2;
        return $area;
    }
    function resultArea() {
        $area = $this->calculateArea();
        echo "Triangle area  = base: {$this->width}, height: {$this->height} is: " . $area . "<br>";
    }
}
class Rectangle extends Shape {
    function calculateArea() {
        $area = ($this->width * $this->height);
        return $area;
    }
    function resultArea() {
        $area = $this->calculateArea();
        echo "Rectangle area  = width: {$this->width}, height: {$this->height} is: " . $area . "<br>";
    }
}

$triangle = new Triangle(18,13);
$Rectangle =new Rectangle(12,41);

$triangle->resultArea();
$Rectangle->resultArea();
?>