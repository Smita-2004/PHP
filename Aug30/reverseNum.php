<?php
$num=readline("Enter number: ");
$rev=0;
while($num!=0){
    $n=$num%10;
    $rev=$rev*10+$n;
    $num=intval($num/10);
}
echo "reverse number is: ",$rev;
?>          