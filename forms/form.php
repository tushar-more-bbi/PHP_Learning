<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="ms-3 mt-4">GET & POST REQUEST IN PHP</h3>
    
    <hr>




     
 <?php

 //In PHP, there are two methods to handle form submissions: GET and POST. Each method has its advantages and disadvantages, so it is crucial to choose the appropriate one based on your needs.

//GET METHOD 

//The GET method sends form data appended to the URL as query parameters. When using the GET method, the submitted data is visible in the browser's address bar and can be bookmarked. This method is suitable for simple and non-sensitive data, such as search queries.

//POST METHOD 

//The POST method sends form data in the request's body, making it invisible in the browser's address bar. This method is suitable for handling sensitive data, such as login credentials, and for submitting large amounts of data.



//$_SERVER['REQUEST_METHOD'] returns the type of the request 
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_email = $_POST['email'];// Way to get email & password values
    $_password = $_POST['pass'];
    echo "This is a POST request : Email is $_email & password is $_password";
    // Handle the POST data here
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'This is a GET request';
    // Handle the GET data here
} else {
    echo 'This is neither a POST nor a GET request';
}
?> 


    <div class="container mt-3">

    <form action="form.php" method="post">
         <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         </div>
         <div class="mb-3">
              <label for="pass" class="form-label">Password</label>
              <input  name="pass" email="pass" class="form-control" id="pass">
         </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>