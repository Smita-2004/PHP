<?php
$nation=readline("Enter your nationality: ");
if($nation=="India"){
$age=readline("Enter your age: ");
if($age>=18){
    echo "You are eligible to vote in India";
}
else{
    echo "Sorry! you are not eligible to vote in India";
}
}
else{
echo "Sorry! you are not eligible to vote in India";
}
?>