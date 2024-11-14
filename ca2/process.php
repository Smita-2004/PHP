<?php
           
if (empty($_POST["name"]) || empty($_POST["email"])) {
    echo "<p>All fields are required. </p>";
}
else{
    echo "";
}
    $name = $_POST["name"];
    $email = $_POST["email"];
   
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
?>

