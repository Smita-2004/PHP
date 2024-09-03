<?php
$username=readline("Enter username: ");
if($username==NULL){
    echo "'Guest User'";
}
else{
    echo " ' Welcome' ",$username;
}
?>