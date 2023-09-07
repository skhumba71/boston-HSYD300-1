<?php
// Open the file "newfile.txt" for writing
$file = fopen("newfile.txt", "w");

// Check if the file was opened successfully
if ($file) {
    // Text to write to the file
    $textToWrite = "This is some text that we are writing to the file.\n";
    
    // Write the text to the file
    fwrite($file, $textToWrite);
    
    // Close the file
    fclose($file);
    
    echo "Text has been successfully written to 'newfile.txt'.";
} else {
    echo "Unable to open the file for writing.";
}
?>
