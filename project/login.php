<?php 
//session_start();
require"lib.php";

if(isset($_POST['email'])){


    $email=$_POST['email'];
    $password=$_POST['password'];

            //hash the password 
    $newpassword=hash_pasword($password);


    $ret=login($email,$newpassword);

    if(!empty($ret)){
        $_SESSION['user']=$ret;
        header("LOCATION:index.php");
    }else{

        echo"invaild user and input</br>";
    }
}else{

    require"desgin/login.html";

}


?>
<a href="http://localhost/projects/php%20task%20IEEE/project/index.php">index</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/login.php">login</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/regester.php">regester</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/logout.php">logout</a></br>