<?php
// gives common in between arrays
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("red","blue");
$result=array_intersect($a1,$a2,$a3);
print_r($result);
?>