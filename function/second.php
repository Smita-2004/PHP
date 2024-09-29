<?php
//create a function with name outer which contains a local variable with some msg now in side the fumction we have to define inner function that try to access and modifies the value $a, display the value of variable from both function
function outer(){
    $ a= "Hello";
    function inside(){
        $b= $GLOBALS['a'];
        $a= "hiii";
        echo $a;
    }
}
outer();
?>