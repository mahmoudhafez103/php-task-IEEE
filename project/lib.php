<?php 

session_start();

function regester($username,$email,$password,$img){

    $connection= mysqli_connect("localhost","root","","ieee");

    $order="INSERT INTO `users`( `name`, `email`, `password`,`img`) VALUES ('$username','$email','$password','$img')";

    $query=mysqli_query($connection,$order);

    $res=mysqli_affected_rows($connection);

    if($res==1){
        return true;
    }else{
        return false;
    }
}


function login($email,$password){

    $connection= mysqli_connect("localhost","root","","ieee");

    $order="SELECT * FROM `users` WHERE `email`='$email'AND `password`='$password'";

    $query=mysqli_query($connection,$order);

    $res=mysqli_fetch_assoc($query);

    return $res;
}


function hash_pasword($password){

    return sha1($password);

    
}

function alldata(){

    $connection= mysqli_connect("localhost","root","","ieee");

    $order="SELECT `id`,`name`,`email` FROM `users`";

    $query=mysqli_query($connection,$order);

    $data=[];
    while($res=mysqli_fetch_assoc($query)){
        $data[]=$res;
    }
    
    
    return $data;
}


function userRole(){
    return$_SESSION['user']['user_rule'];
}




function deleteUser($id){

    $connection= mysqli_connect("localhost","root","","ieee");

    $order="DELETE FROM `users` WHERE `id`=$id ";

    $query=mysqli_query($connection,$order);

    $res=mysqli_affected_rows($connection);

    if($res==1){
        return true;
    }else{
        return false;
    }
}