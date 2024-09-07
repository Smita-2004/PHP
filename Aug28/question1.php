<?php
$a=readline("Are you a regular customer(y/n)?");
$p=readline("Purchase amount: ");
if($a==y){
    if($p>500){
        echo "20% discount given";
    }
    else if(p<=500){
        echo "10% discount given";
    }
}
else{
    if($p>500){
        echo "5% discount given";
    }
    else{
        echo "no discount given";
    }
}
?>