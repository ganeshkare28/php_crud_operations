<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql="insert into `crud` (name,email,mobille,password) values('$name','$email','$mobile','$password')";

    $result=mysqli_query($con,$sql);
    if($result){
        
       header('location:display.php');
       
    }
    else{
        die(mysqli_error($con));
    }

}


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" >

    <title>Crud operation</title>
  </head>
  <body>
    

    <div class="container my-5">

    <form method="post">

  <div class="form-group my-2">
    <label>Enter your name </label>
    <input type="text" class="form-control" placeholder="Enter your name " autocomplete="off" name="name">
  </div>


  <div class="form-group my-2">
    <label>Enter your email </label>
    <input type="email" class="form-control" placeholder="Enter your email " autocomplete="off"  name="email">
  </div>

  <div class="form-group my-2">
    <label>Enter your Mobile number</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number  " autocomplete="off" name="mobile">
  </div>

  <div class="form-group my-2">
    <label>Enter your password </label>
    <input type="password" class="form-control" placeholder="Enter your password "  autocomplete="off"  name="password">
  </div>







  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  
  <button class="btn btn-primary my-5"><a href="display.php" class="text-light">Display  user</a></button>
</form>

    </div>
   <script src="script.js"></script>
  </body>
</html>