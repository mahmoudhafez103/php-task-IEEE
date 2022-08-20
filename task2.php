<?php 
$number1=3;
$number2=6;
$operation='-';


if ($operation=='+'){
    echo($number1+$number2);
}elseif($operation=='-'){
    echo("result= ". $number1-$number2);
}elseif($operation=='*'){
    echo($number1*$number2);
}elseif($operation=='/'){
    echo($number1/$number2);
}else{
    echo("unkwon op");
}