<?php
session_start();
 $_SESSION['loggedin'] = true;
echo "<h1>Login System</h1>";
echo "<a href = 'welcome.php'>click</a>";
?>
