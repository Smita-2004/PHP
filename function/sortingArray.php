<?php
    $array=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    //ascending order sort by value
    echo "Ascending order sort by value: \n";
    asort($array);
    print_r($array);
    //descending order sort by key
    echo "Descending order sort by key: \n";
    krsort($array);
    print_r($array);
    //descending order sorting by value
    echo "Descending order sort  by vale: \n";
    arsort($array);
    print_r($array);
    //ascending order sorting by key
    echo "Ascending order sorting by key: \n";
    ksort($array);
    print_r($array);

    
    
?>