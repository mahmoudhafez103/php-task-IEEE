<?php 


$con= mysqli_connect('localhost','root','','ieee');


$id=$_POST['id'];
$subject=$_POST['subject'];
$duration=$_POST['duration'];
$cost=$_POST['cost'];




$in = "INSERT INTO `course`(`id`, `name`, `duration`, `cost`) VALUES ('$id','$subject','$duration','$cost')";

 //del="DELETE FROM `course` WHERE `id`=$id ";
mysqli_query($con,$in);


if(mysqli_affected_rows($con)==1){
    echo"good insert";
}else{
    echo"wrong insert";
}