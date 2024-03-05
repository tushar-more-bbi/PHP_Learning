<?php
//Start The session

//In PHP, a session is a way to persist data across multiple HTTP requests for a single user. It allows you to store user-specific information such as username, preferences, or shopping cart items, making it accessible throughout their browsing session on your website.
session_start();

//Setting Session Variables: Once the session is started, you can store data in session variables using the $_SESSION superglobal array.

$_SESSION['username'] = "Tushar";
$_SESSION['password'] = "Tushar12345";

echo "We have save you Session";


?>