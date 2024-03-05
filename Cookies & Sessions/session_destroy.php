<?php

session_start();
session_unset();

//When the user logs out or the session needs to be ended, you can destroy the session and its associated data using the session_destroy() function.
session_destroy();


?>