<?php

include 'connectdemo.php';

$iddemo=$_GET['deleteid'];
$sql="delete from demo where userid=$iddemo";
$delete=mysqli_query($con,$sql);
if($delete){
    header('location:displaydemo.php');
}
else{
    die (mysqli_error($con));
}




?>
