<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="ms-3 mt-4">FORM TO ENTER DATA INTO DATABASE</h3>
    
    <hr>
 <?php




//$_SERVER['REQUEST_METHOD'] returns the type of the request 
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_name = $_POST['name'];// Way to get email & password values
    $_dest = $_POST['dest'];
    // echo "$_name && $_dest";
  //   echo '<div class="alert alert-success" role="alert">
  //   POST REQUEST 
  // </div>';
    //Submitting formdata to database

    //Database Connection
    //Connecting to the Database
$servername="127.0.0.1";
$username="root";
$password="Bbim@1030";
$dbname = "tushar";

//Create a connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "<h6>Database Not Connected</h6>";
}
else{
  echo "<h6>Database Connected</h6>";
}


//Inserting into 

$sql =  "INSERT INTO `ttrip` (`name`, `dest`) VALUES ('$_name', '$_dest')";
$result = mysqli_query($conn,$sql);

if(!$result){
    echo '<div class="alert alert-success" role="alert">
     DATA NOT INSERTED SUCCESSFULLY
   </div>';
}
else{
    echo '<div class="alert alert-success" role="alert">
    DATABASE INSERTED SUCCESSFULLY!!!!
   </div>';
}

} 
elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo '<div class="alert alert-success" role="alert">
    GET REQUEST
  </div>';
    // Handle the GET data here
} else {
    echo '<div class="alert alert-danger" role="alert">
    A simple danger alert—check it out!
  </div>';
}
?> 


    <div class="container mt-3">

    <form action="insertdatathroughform.php" method="post">
         <div class="mb-3">
              <label for="name" class="form-label">Enter your name</label>
              <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
              
         </div>
         <div class="mb-3">
              <label for="dest" class="form-label">Enter your destination</label>
              <input type="text" name="dest" class="form-control" id="dest">
         </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>