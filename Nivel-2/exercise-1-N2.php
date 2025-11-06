<h1 style="color: darkblue;"> Exercise 1 Nivel 2</h1>
<?php
require_once 'PokerDice.php';
$Play1 = new PokerDice();

$Play1->throwDice();
echo "Result of last throw: " . $Play1->getLastThrow() . "<br>";  

$fiveAttempts = $Play1->throwFiveDices();
echo "Result of 5 throws " . implode (",", $fiveAttempts) .  "<br>";
echo "Total Throws: ". $Play1->getTotalThrows();
?>