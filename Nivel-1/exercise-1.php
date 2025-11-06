
<h1>Exercise 1 - Employee Taxes</h1>
<?php
require_once 'Employee.php';
$Joan = new Employee("Joan", 5999);
$Joan->calculateTax();
echo "<br>";
$Maria = new Employee("Maria", 7500);
$Maria->calculateTax();
?>