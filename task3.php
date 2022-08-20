<?php

$ARR=['name'=>'mahmoud','age'=> 25,'add'=>'mansoura'];
print_r($ARR);
echo"</br>";
$persons=[
[
    'name'=>'mahmoud',
    'age'=> 25,
    'add'=>'mansoura'
],
[
    'name'=>'mohamed',
    'age'=> 25,
    'add'=>'mansoura'
],
[
    'name'=>'nooo',
    'age'=> 25,
    'add'=>'mansoura'
],
[
    'name'=>'mahmoud',
    'age'=> 25,
    'add'=>'mansoura'
],
[
    'name'=>'mohamed',
    'age'=> 25,
    'add'=>'mansoura'
],
[
    'name'=>'nooo',
    'age'=> 25,
    'add'=>'mansoura'
],
];

// echo"<pre>";
// print_r($persons);

foreach($persons as $person=>$x){
    if($x['name']=='mohamed'){
    foreach($x as $i=>$v){
        echo ($i." : ".$v."</br>");
    }
    echo"<hr>";
}
}

print_r($_POST);