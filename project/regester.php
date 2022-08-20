<?php 
//session_start();

require"lib.php";

if(isset($_POST['username'])){


    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
        //edit the img of user
    
        $tmp=$_FILES['img']['tmp_name'];
        $type=$_FILES['img']['type'];
        $typeofarr=explode("/",$type);
        $ext=$typeofarr[1];
        $imgfullname=$username.".".$ext;
    
        //hash the password 
    $newpassword=hash_pasword($password);

        //send the data to db
    $ret=regester($username,$email,$newpassword,$imgfullname);

    if($ret==true){
        move_uploaded_file($tmp,'C:\xampp\htdocs\projects\php task IEEE\project\desgin\img/'.$imgfullname);
        echo"user added succusfully";
        echo"</br> ";?>
<form action="login.php">
    <input type="submit" value="go to login">
</form>

<?php 
        }else{
            echo"failed data";
        }
    }else{

    require"desgin/regester.html";

}

?>
<a href="http://localhost/projects/php%20task%20IEEE/project/index.php">index</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/login.php">login</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/regester.php">regester</a></br>
<a href="http://localhost/projects/php%20task%20IEEE/project/logout.php">logout</a></br>