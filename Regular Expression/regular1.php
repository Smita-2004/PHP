<?php
$string=" PHP is the web scripting php lanhuagee of 522 choice";
$exp= preg_match_all("/[Wo]/i",$string,$array);
if($exp){
    echo "A match was found.";
}
else{
    echo "A match was not found";
}
echo "<prev>";
print_r($array);
echo "</prev>";
?>