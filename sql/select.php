<?php 


$con= mysqli_connect('localhost','root','','ieee');


// $id=$_POST['id'];
// $subject=$_POST['subject'];
// $duration=$_POST['duration'];
// $cost=$_POST['cost'];




// $in = "INSERT INTO `course`(`id`, `name`, `duration`, `cost`) VALUES ('$id','$subject','$duration','$cost')";

//  $del="DELETE FROM `course` WHERE `id`=$id ";


$ss="SELECT * FROM `course`";
$Re=mysqli_query($con,$ss);

$numrows= mysqli_num_rows($Re);


if($numrows>0){

    $arr=[];
    while($ddata=mysqli_fetch_assoc($Re)){
        $arr[]=$ddata;
        $arr[]=$ddata['id'];
    }


    echo"<pre>";

    print_r($arr);
}
// if(mysqli_affected_rows($con)==1){
//     echo"good insert";
// }else{
//     echo"wrong insert";
// }