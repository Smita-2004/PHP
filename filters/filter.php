<?php
// $str = "<h1>Hello World!</h1>";
// if(filter_var($str,FILTER_VALIDATE_STRING)){
//     echo"valid";
// }
// else{
//     echo " not valid";
// }
// echo $newstr;
// echo "<br>";

$a=       0;
if(filter_var($a,FILTER_VALIDATE_INT)){
    echo"valid";
}
else{
    echo " not valid";
}

echo "<br>";
?>