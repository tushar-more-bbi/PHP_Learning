<?php
$servername="127.0.0.1";
$username="root";
$password="Bbim@1030";
$database="tushar";//To connect with specific databse & work on it.

//Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}
else{
    echo "<h2>Connection to Database was successful</h2><br>";
}


//DATABASE CREATION
//Creating a database through PHP 
/*
$sql = "CREATE DATABASE tushar1";//SQL Query to create a Database
$result = mysqli_query($conn,$sql);//mysqli_query is used to run that query we need to pass to two argument $conn-connection & $sql-query

if(!$result){
echo "DB Not created " . mysqli_error($conn);
}
else{
    echo "DB Created Successfully";
}
*/



//TABLE CREATION
//Creating a table through PHP 
/*
$sql = "CREATE TABLE `ttrip` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `dest` VARCHAR(20) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo "TABLE Not created " . mysqli_error($conn);
    }
    else{
        echo "TABLE Created Successfully";
    }
*/


//INSERTION
//Inserting data into database through PHP
// $sql =  "INSERT INTO `ttrip` (`sno`,`name`, `dest`) VALUES ('4','Shreyas', 'USA')";
// $result = mysqli_query($conn,$sql);

// if(!$result){
//     echo "Data not inserted" . mysqli_error($conn);
// }
// else{
//     echo "Data Inserted Successfully";
// }

//


//FETCHING 
// $sql = "SELECT * FROM `ttrip`";
// $result = mysqli_query($conn,$sql);

// $num = mysqli_num_rows($result);//mysqli_num_rows return the count of the record in an table 

// echo "$num <br>";

// // $row = mysqli_fetch_assoc($result);//mysqli_fetch_assoc() is then used to fetch a single row from the result set as an associative array. In this array, the column names are used as keys, and the corresponding values are the data in those columns for the current row.


// while($row = mysqli_fetch_assoc($result)){
// echo  "Hello  " . $row['name'] . "  Welcome to  " . $row['dest'];
// echo "<br>";
// }


//UPDATION
// $sql = "SELECT * FROM `ttrip` WHERE `dest` = 'USA'";
// $result =mysqli_query($conn,$sql);

// //Usage of WHERE CLAUSE to fetch data from database
// $num = mysqli_num_rows($result);
// if($num > 0){
//     while($row = mysqli_fetch_assoc($result)){
//         echo $row['name'] . "  &&   " . $row['dest'];
//         echo "<br>";
//     }
// }

//Usage of WHERE CLAUSE to update data in database
// $sql = "UPDATE `ttrip` SET `name` = 'TusharUpdated' WHERE `ttrip`.`dest` = 'USA'";
// $result = mysqli_query($conn,$sql);
// $affectedrows = mysqli_affected_rows($conn);// return the number of rows which has been updated;
// echo $affectedrows;

// if($result){
//     echo "<h2>Data updation done</h2>";
// }
// else{
//     echo "<h2>Data updation not done</h2>";
// }


//DELETION - Delete a specific row or entry from database;
//LIMIT - returns the number of records to be deleted/selected
$sql =  "DELETE FROM `ttrip` WHERE `dest` = 'India' LIMIT 1";
$result =  mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);

echo "$aff";

if($result){
    "Deleted entry successfully";
}
else{
    "Not deleted because of error" . mysqli_error($conn);
}

?>