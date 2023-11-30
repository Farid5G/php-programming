<?php
// this code is used to read a single line from a file ;
// $file = fopen('read.txt', 'r');
// $line = fgets($file);
// echo $line;
// the given code can able to read multiple line from the file
$file = fopen('read.txt', 'r'); // Open the file in read mode

    while (!feof($file)) { // Loop until the end of the file is reached
        $line = fgets($file); // Read a line from the file
        echo $line; // Output the line
        
        // You can perform additional operations on each line here
    }
    fclose($file); // Close the file

?>
