<?php
/*$username = "SK Maseko";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
*/

// array sysntex
/*$ar = array('sk', 'posh','mihle');
echo $ar[0]
*/

//Concantenate string using (.) period
/*$msg = 1000;
echo "You have " . $msg . " messages.";*/

// Define a function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

// Define an array of numbers to check for primality
$numbers = array(2, 3, 4, 5, 6, 7, 8, 9, 10);

// Loop through the array and check each number for primality
foreach ($numbers as $num) {
    if (isPrime($num)) {
        echo $num . " is prime. " . "<br>";
    } else {
        echo $num . " is not prime. " . "<br>";
    }
}
?>


