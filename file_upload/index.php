<?php 


print_r($_POST);

echo"<pre>";
print_r($_FILES);

$ph_name=$_POST['username'];
$name=$_FILES['file']['name'];

$p=$_FILES['file']['tmp_name'];

move_uploaded_file($p,'C:\xampp\htdocs\projects\php task IEEE\img/'.$ph_name.".jpg");