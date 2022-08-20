<?php 
//session_start();
require"lib.php";

if(empty($_SESSION['user'])){
    header("LOCATION:login.php");

}

$data=alldata();
$userRole= userRole();
// print_r($data);



require"desgin/index.php";
?>
<a href="http://localhost/projects/php%20task%20IEEE/project/index.php">index</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/login.php">login</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/regester.php">regester</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/logout.php">logout</a></br>