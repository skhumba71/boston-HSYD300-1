<?php
// Define a multidimensional array
$clubs = array(
 array("Newcastle United","England", 1892),
 array("Gezira Sporting Club", "Egypt", 1882),
 array("Zamalek Sporting Club", "Egypt", 1911),
 array("Bidvest Wits South Africa", "Egypt", 1921)
);
// Print the contents of the array
echo "<b>List of football clubs: </b> ". "<br>";
foreach ($clubs as $club) {
    echo $club[0] . " from " . $club[1] . " founded in " . $club[2] . "<br>" ;
}
// Sort the array by the first column
sort($clubs);
// Print the sorted array
echo "<br>" ."<b> Sorted list of football clubs: </b>". "<br>";
foreach ($clubs as $club) {
    print_r($club[0] . " from " . $club[1] . " founded in " . $club[2] . "<br>");
}
?>

