<?php
// Define a class named Animal
class Animal {
    // Define properties
    public $name;
    public $weight;
    
    // Define a constructor method
    public function __construct($name, $weight) {
        $this->name = $name;
        $this->weight = $weight;
    }
    
    // Define a method to display the animal information
    public function display() {
        echo "Name: " . $this->name . ", Weight: " . $this->weight . " kg<br>";
    }
}

// Define a function to calculate the total weight of animals
function calculateTotalWeight($animals) {
    $totalWeight = 0;
    foreach ($animals as $animal) {
        $totalWeight += $animal->weight;
    }
    return $totalWeight;
}

// Create an array of Animal objects
$animals = array(
    new Animal("Lion", 200),
    new Animal("Elephant", 5000),
    new Animal("Giraffe", 800)
);

// Display the animal information
foreach ($animals as $animal) {
    $animal->display();
}

// Calculate the total weight of animals
$totalWeight = calculateTotalWeight($animals);
echo "<b>Total weight of animals:</b> " . $totalWeight . " kg<br>";
?>