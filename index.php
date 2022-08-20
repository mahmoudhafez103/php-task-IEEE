<?php 

//session,cookies
session_start();
if(empty($_SESSION['username'])){
    header("LOCATION:form.php");
}
//print_r($_SESSION);

echo"home";