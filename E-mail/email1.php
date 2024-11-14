<?php
$to="smita23tiwari.008@gmail.com";
$subject="test email2";
$message="This is test email for php";
$from="smita23tiwari.007gmail.com";
$hearders="From:$from";
mail($to,$subject,$message,$headers);
echo "mailsent";
?>