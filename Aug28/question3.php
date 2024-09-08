<?php
$i=readline("Income: ");
$age=readline("Age: ");
$tax= 0;
if($i<10000){
    echo "No tax applied\n";
    $tax=0;
}
if($i>=10000 && $i<=20000){
    if($age<=65){
        echo "10% tax applied\n";

        $tax=$i*0.10;
    }
    else{
        echo "5% tax applied\n";
        $tax=$i*0.50;
    }
}
if($i>20000){
    if($age<=65){
        echo "20% tax applied\n";
        $tax=$i*0.20;
    }
    else{
        echo " 15% tax applied\n";
        $tax=$i*0.15;
    }
}
echo "Tax :" ,$tax;
?>