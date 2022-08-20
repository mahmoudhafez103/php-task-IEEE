<?php 

session_start();
$_SESSION['name']=['mahmoud',25,'age'];
for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j < $i; $j++) { 
        # code...
        echo"*";
    }
    echo"</br>";
}
echo"<hr>";




for ($i=0; $i <= 8; $i++) { 
    for ($j= 0; $j<=8; $j++) { 
        
         echo $j."|";
    }echo "<hr>";
};