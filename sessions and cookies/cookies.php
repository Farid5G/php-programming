<?php
// Set a cookie with name, value, and expiration time
$cookieName = "username";
$cookieValue = "JohnDoe";
$expirationTime = time() + 86400; // Expiration time set to 30 days

setcookie($cookieName, $cookieValue, $expirationTime, "/"); // "/" indicates that the cookie is available for the entire website

// Display a message indicating the cookie is set
echo "Cookie '$cookieName' is set with the value '$cookieValue'";
echo"<a href = '/php imp concepts/sessions and cookies'>click this link to go to parent directary</a>";
?>
