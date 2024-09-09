<?php
$a=readline("Reidential or commercial?");
$b=readline("utility: ");
if($a==Residential){
    if($b==100){
        echo $b*0.5;
    }
    if($a>100){
        echo $b*0.75;
    }
    else{
        echo $b*1;
    }
}
if($a==Commercial){
    if($a==200){
        echo $b*1.5;
    }
    if($a>200){
        echo $b*2;
    }
}
else{
    echo $b*2.5;
}
echo "Your bill is: ",$b;
?>