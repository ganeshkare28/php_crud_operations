<?php

$host="localhost";
$username="root";
$password="";
$databasename="demo";


$con=new mysqli($host,$username,$password,$databasename);

if($con){
    // echo "connection successful";
}
else{
    die (mysqli_error($con));
}

?>