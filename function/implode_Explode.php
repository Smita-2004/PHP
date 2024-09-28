<?php
//implode -> convert array to string 
// explode -> convert string to array
$a="Hello How are you";
print_r(explode(" ", $a));
print_r(explode(" ", $a, 2));

$arr=["Hello","how","are","you"];
echo implode(" ",$arr);

?>