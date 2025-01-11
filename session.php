<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="enter your name" name="user">
        <br>
        <br>
        <button name="button" value="set">Set session</button>
        <br>
        <br>
        <button name="button" value="get">Get session</button>
        <br>
        <br>
        <button name="button" value="delete">Delete session</button>
        <br>
        <br>

    </form>
</body>
</html>


<?php

session_start();
if(isset($_POST['button'])){
    if($_POST['button']=='set'){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }

    if($_POST['button']=='get'){
       
       echo $_SESSION['user'];
    }

    if($_POST['button']=='delete'){
       session_destroy();
        
     }


}

print_r($_COOKIE);

?>