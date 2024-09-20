<?php
$a=10;
$b=20;
function sum(){
    $s= $GLOBALS ['a'] + $GLOBALS ['b'];
    echo $s;
}
sum();
?>