<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from crud where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Record deleted successfully of id=$id";
        header("location:display.php");
    }
}



?>