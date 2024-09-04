<?php
$marks=readline("Enter you marks: ");
if($marks>90){
    echo "Your grade is: A";
}
else if($marks>=80 && $marks<=89){
    echo "Your grade is: B";
}
else if($marks>=70 && $marks<=79){
    echo "Your grade is: C";
}
else if($marks>=60 && $marks<=69){
    echo "Your grade is: D";
}
else {
    echo "Your grade is: F";
}
?>