<?php 
//session_start();
require"lib.php";

if(empty($_SESSION['user'])){
    header("LOCATION:login.php");

}


$userId=$_SESSION['user']['id'];
if($userId==$_GET['id']){
    
    echo "your permission invalid";
}
else{
    
    $res=deleteUser($_GET['id']);
    if($res==True){
        header("LOCATION:index.php");
    }
}