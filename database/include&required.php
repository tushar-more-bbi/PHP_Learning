<?php

//Include & Require are used to inlcude a file into our php script

//INCLUDE
// -- If the file specified in the include statement is not found, PHP will issue a warning, but the script will continue execution.
// -- Include statements can be used multiple times within a script.


//REQUIRE

//--If the file specified in the require statement is not found, PHP will issue a fatal error and halt the script execution.
//--Require statements are typically used for essential files that your script cannot function without.



include 'databaseconnection.php';
// require 'databaseconnection.php';
echo "True";

// FETCHING 
$sql = "SELECT * FROM `ttrip`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result); //mysqli_num_rows return the count of the record in an table 

echo "$num <br>";

// $row = mysqli_fetch_assoc($result);//mysqli_fetch_assoc() is then used to fetch a single row from the result set as an associative array. In this array, the column names are used as keys, and the corresponding values are the data in those columns for the current row.


while ($row = mysqli_fetch_assoc($result)) {
    echo  "Hello  " . $row['name'] . "  Welcome to  " . $row['dest'];
    echo "<br>";
}

?>
