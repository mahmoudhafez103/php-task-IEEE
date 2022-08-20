<?php
    $mainColor='#fff';   //main Color

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $mainColor=$_POST['color'];
        setcookie("Background",$mainColor,time()+10,'/');
    }

    if(isset($_COOKIE['Background'])){
        $body=$_COOKIE['Background'];
    }else{
        $body=$mainColor;
    }

    print_r($_COOKIE);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>

<body style="background-color:<?php echo $body?> ;">
    <form action="<?php echo $_SERVER['PHP_SELF'];?> " method="post">
        <input type="color" name="color" id="">
        <input type="submit" value="chosse">
    </form>
</body>

</html>