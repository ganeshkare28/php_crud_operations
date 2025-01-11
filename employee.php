<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="employee.php">

        <h2>EMPLOYEE REGISTRATION </h2>
          
       
        <label for="Enter your name">Enter your name</label>
        <br>
        <input type="text" name="emp_name">
        <br>
        <br>

        <label for="Enter your name">Enter your email</label>
        <br>
        <input type="text" name="emp_email">
        <br>
        <br>
        <label for="Enter your name">Enter your Password :</label>
        <br>
        <input type="text" name="emp_password">
        <br>

        <label for="Enter emp id">Enter emp id :</label>
        <br>
        <input type="text" name="emp_id">
        <br>


        <input type="submit" name="submit">
        <br>
        <br>
        <button type="submit" name="delete">Delete</button>
    </form>
</body>
</html>


<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $emp_name=$_POST['emp_name'];
    $emp_email=$_POST['emp_email'];
    $emp_password=$_POST['emp_password'];
    $emp_id=$_POST['emp_id'];

    $sql="insert into employees(emp_name,emp_email,emp_password) values ('$emp_name','$emp_email','$emp_password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }

    $sql_del="delete from employees where emp_id=$emp_id";
    $delete=mysqli_query($con,$sql_del);
    if($delete){
        echo "record deleted successfully";
    }
}
    


?>

