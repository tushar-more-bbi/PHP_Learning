<?php
echo "<h1>DATABASE CONNECTION SCRIPT</h1><br>";

/*
WAYS to connect to a MySQL Database
1. MYSQLi extension
2. PDO
*/

//Connecting to the Database
$servername="127.0.0.1";
$username="root";
$password="Bbim@1030";

//Create a connection
$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}
else{
    echo "Connection to Database was successful";
}


?>