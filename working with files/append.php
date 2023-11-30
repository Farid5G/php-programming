<!-- 
In PHP, the "append file" mode allows you to open a file and write data at the end of its existing content, without overwriting or truncating the original content. The fopen() function uses the "a" or "a+" mode to enable append file functionality. -->
<?php
$file = fopen('data.txt', 'a');
if ($file) {
    $text = "lets us see how to take input from the user\n";
    fwrite($file, $text);
    fclose($file);
    echo "Content appended successfully.";
} else {
    echo "Failed to open the file.";
}
?>