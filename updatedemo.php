
<?php 
include 'connectdemo.php';

$id=$_GET['updateid'];
$sql="select * from demo where userid=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$username=$row['username'];
$email=$row['email'];
$passowrd=$row['password'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action="userdemo.php" method="post">
    username : <input type="text" name="name"  id="name" required value="<?php echo $username; ?>"><br>
    email : <input type="email" name="email"  id="email" required value="<?php echo $email; ?>"><br>
    password  : <input type="password" name="password"  id="password" required value="<?php echo $passowrd; ?>"><br>
    <button type="submit" name="submit">update</button>

 </form>
</body>
</html>
