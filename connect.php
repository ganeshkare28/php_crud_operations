<?php


$host="localhost";
$username="root";
$password=null;
$bdname="ganesh";

$con=new mysqli('localhost','root','','crudoperation');

if(!$con){
    die(mysqli_error($con));

}


// $con=new mysqli($host,$username,$password,$bdname);

// if($con){
//     echo "Connected to ganesh db successfully";
// }
































?>