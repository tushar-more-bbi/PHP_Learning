<?php
error_reporting(E_ALL); // Enable error reporting

echo "<h1>COOKIES</h1><br>";
//Cookies in PHP are a way to store small pieces of data on the client's computer. They're commonly used to store user preferences, session identifiers, shopping cart contents, and more. 

// Set a cookie named "user" with the value "John Doe" that expires in 1 hour
setcookie("user", "John Doe", time() + 3600, "/");

echo "The cookie is set";
?>
