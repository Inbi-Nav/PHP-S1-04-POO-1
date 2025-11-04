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