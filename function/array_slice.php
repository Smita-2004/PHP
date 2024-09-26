<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_slice($a1,1,2));
echo "<br>";

$a2=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_slice($a2,1,2,true));
?>