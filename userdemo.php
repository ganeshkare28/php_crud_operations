<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action="userdemo.php" method="post">
    username : <input type="text" name="name"  id="name" required><br>
    email : <input type="email" name="email"  id="email" required><br>
    password  : <input type="password" name="password"  id="password" required><br>
    <button type="submit" name="submit">submit</button>

 </form>
</body>
</html>

<?php 
include 'connectdemo.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $stmt=$con->prepare("insert into  demo(username,email,password) values (?,?,?)");
    $stmt->bind_param("sss",$name,$email ,$password);

    // $result=mysqli_query($con,$sql);
    $result=$stmt->execute();
    if($result){
        echo "data updated successfully";
        header('location:displaydemo.php');
    }
    else{
        echo "error while inserting data";
    }
}

?>