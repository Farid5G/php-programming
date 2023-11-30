<!-- store_text.php -->
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
    $userText = $_POST["user_text"]; // Retrieve the entered text from the form
    
    // Store the entered text in a file
    $file = fopen("text_storage.txt", "a");
    fwrite($file, $userText . "\n");
    fclose($file);
    
    echo "Tap to see what everyone have return!\n";
}

// Explaination of the above code

// if ($_SERVER["REQUEST_METHOD"] == "POST"): This conditional statement checks if the request method is POST. It ensures that the code inside the if block will be executed only when the form is submitted.

// $userText = $_POST["user_text"];: This line retrieves the entered text from the form using the $_POST superglobal. $_POST["user_text"] corresponds to the name attribute of the text input field in the HTML form (<input type="text" name="user_text" ...>).

// $file = fopen("text_storage.txt", "a");: This line opens the file "text_storage.txt" in append mode ("a"). It creates the file if it doesn't exist. The fopen() function returns a file pointer resource that is stored in the $file variable.

// fwrite($file, $userText . "\n");: This line writes the entered text to the file using the fwrite() function. $file is the file pointer resource, $userText contains the entered text, and "\n" adds a new line character at the end to separate each entry.

// fclose($file);: This line closes the file using the fclose() function. It's important to close the file after writing to release system resources.

// echo "Text stored successfully!";: This line outputs a success message to the browser.
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action="" method = "post">
        <input type="submit" name = "show" value = "click">
    </form>
</body>
</html>
<?php
if(isset($_POST['show'])){
    $file = fopen('text_storage.txt', 'r'); // Open the file in read mode

    while (!feof($file)) { // Loop until the end of the file is reached
        $line = fgets($file); // Read a line from the file
        echo $line . "<br>"; // Output the line
        
        // You can perform additional operations on each line here
    }
    fclose($file);
}
?>