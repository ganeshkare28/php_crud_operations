<?php

include "connect.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" >
    <title>Display user</title>
</head>
<body>
   <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>

      <th scope="col">MOBILE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">operation</th>
      

    </tr>
  </thead>
  <tbody>

  <?php
  
  $sql="select * from crud";
  $result=mysqli_query($con,$sql);
  if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobille'];
        $password=$row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
   <button class="btn btn-primary "><a href="update.php?updateid='.$id.'" class="text-light">UPDATE</a></button>
   <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light">DELETE</a></button>
</td>
    </tr>';

    }
  }

  ?>

 
  </tbody>
</table>
   </div>   
</body>
</html>



