<?php
session_start();
if(isset($_SESSION['loggedin'])){
    echo "<h1>welcome beta</h1>";
    echo"<br>";
    echo "<a href = 'logout.php'>logout</a>";
}
else{
    header('location: session.php');
}
?>
