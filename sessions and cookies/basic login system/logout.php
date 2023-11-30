<?php
session_start();
session_unset();
session_destroy();

echo"<br>";
echo "<a href = 'welcome.php'><h1>login</h1></a>";

?>