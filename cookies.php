<?php

// setcookie('firstcookie','you are in first cookie...',time()+(86400));
// echo "<br>";
// setcookie('secondcookie','you are in second cookie ...',time()+(86400));

// if(isset($_COOKIE['firstcookie'])){
//     echo $_COOKIE['firstcookie'];
// }
// else{
//     echo "NO cookie set";
// }
// echo "<br>";

// if(isset($_COOKIE['secondcookie'])){
//     echo $_COOKIE['secondcookie'];
// }
// else{
//     echo "NO second   cookie set";
// }  

// echo "<br>";
// print_r($_COOKIE);
?>


<form action="" method="post">
        <input type="text" placeholder="enter your name" name="user">
        <br>
        <br>
        <button name="button" value="set">Set cookie</button>
        <br>
        <br>
        <button name="button" value="display">Get cookie</button>
        <br>
        <br>
        <button name="button" value="delete">Delete cookie</button>
        <br>
        <br>
        <button name="button" value="sum">Add</button>
        <br>
        <br>

    </form>


    <?php 
    if(isset($_POST['button'])){
        if($_POST['button']=='set'){
            $val=$_POST['user'];
            echo $val;
            setcookie('cookie1',$val,time()+(86400));
            if(isset($_COOKIE['cookie1'])){
                echo "cookie1 set successfully";
                echo "<br>";
                                echo $_COOKIE['cookie1'];
            }
        }

        if($_POST['button']=='display'){
       
            echo $_COOKIE['cookie1'];
         }

         if($_POST['button']=='delete'){
            if(isset($_COOKIE['cookie1'])){
                setcookie("cookie1",null,-1);
            }
       
          
         }

        

    }

    function sum(){
    $sum=0;

    for($i=0;$i<=10;$i++){
       $sum =$sum +$i;
       
    }

    echo $sum;

}

if(isset($_POST['button'])){
    if($_POST['button']=='sum'){
        sum();
    }
}



    
    ?>

