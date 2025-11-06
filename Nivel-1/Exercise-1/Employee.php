<?php
class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function calculateTax() {
        if ($this->salary > 6000) {
            echo "{$this->name} has to pay taxes!";
        } else {
            echo "{$this->name} doesn't have to pay taxes";
        }
    }
}
?>