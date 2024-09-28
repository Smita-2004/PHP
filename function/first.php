<?php
function inc(){
    static $a = 10;
    $b = 20;
    $a++;
    $b++;
    echo $a," ",$b;
}
inc();
inc();
?>