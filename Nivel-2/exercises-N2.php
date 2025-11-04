<h1 style="color: darkblue;"> Exercise 1 Nivel 2</h1>

<?php
Class PokerDice {
    public $faces= ['As', 'K', 'Q', 'J', 7 , 8];
    public $lastThrow;
    public $count = 0;

    function throwDice() {
        $randomThrow = array_rand($this->faces);
        $this->lastThrow  = $this->faces[$randomThrow];
        $this->count++;
    }

    function getLastThrow () {
        return $this->lastThrow;
    }   

    function throwFiveDices() {
    $results = [];
    for($i = 0; $i < 5; $i++) {
        $this->throwDice(); 
        $results[] = $this->lastThrow;
    }
    return $results;
    }

    function getTotalThrows () {
        return $this->count;
    }
}

$Play1 = new PokerDice();

$Play1->throwDice();
echo "Result of last throw: " . $Play1->getLastThrow() . "<br>";  

$fiveAttempts = $Play1->throwFiveDices();
echo "Result of 5 throws " . implode (",", $fiveAttempts) .  "<br>";

echo "Total Throws: ". $Play1->getTotalThrows();

?>