<?php
$file = fopen('write.txt', 'w'); // Open the file in write mode
// The if statement checks if the file is successfully opened by evaluating the return value of the fopen() function. 
if ($file) {
    $text = "This is the content to write to the file.\n";
    fwrite($file, $text); // Write the content to the file
    fclose($file); // Close the file
    echo "Content written successfully.";
} else {
    echo "Failed to open the file.";
}
// The fopen() function in PHP returns a file pointer resource on success or false on failure.
?>