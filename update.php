

<?php
include 'connect.php';


$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobille'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql="update crud set id=$id,name='$name',email='$email',mobille='$mobile',password='$password' where  id=$id";

    $result=mysqli_query($con,$sql);
    if($result){
echo "updated successfully";
    //    header('location:display.php');
       
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
    <input type="text" class="form-control" placeholder="Enter your name " autocomplete="off" name="name" value="<?php echo $name;  ?>">
  </div>


  <div class="form-group my-2">
    <label>Enter your email </label>
    <input type="email" class="form-control" placeholder="Enter your email " autocomplete="off"  name="email"  value="<?php echo $email; ?>" >
  </div>

  <div class="form-group my-2">
    <label>Enter your Mobile number</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number  " autocomplete="off" name="mobile"  value="<?php echo $mobile;  ?>">
  </div>

  <div class="form-group my-2">
    <label>Enter your password </label>
    <input type="password" class="form-control" placeholder="Enter your password "  autocomplete="off"  name="password"  value="<?php echo $password;  ?>">
  </div>







  <button type="submit" class="btn btn-primary" name="submit">Update</button>
  

</form>

    </div>
   <script src="script.js"></script>
  </body>
</html>