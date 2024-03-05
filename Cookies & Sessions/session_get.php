<?php
session_start();

//You can access session variables throughout your PHP script as long as the session is active.

if(isset($_SESSION['username'])){
    echo "<h1>LOGGED IN</h1>";
}
else{
    echo "<h1>LOGGED OUT</h1>";
}


?>