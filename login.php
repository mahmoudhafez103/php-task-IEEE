<?php 
session_start();
define('rusername','asmaa');
define('rpassword','123');
if(isset($_POST['username'])){
    if($_POST['username']==rusername&&$_POST['password']==rpassword){
        echo'good login';
        $_SESSION['username']=$_POST['username'];
        header("LOCATION:index.php");
    }else{
        echo"wrong answer";
    }
}