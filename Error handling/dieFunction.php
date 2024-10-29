<?php
if (file_exists("mytestfile.txt")) {
    $file = fopen("mytestfile.txt", "r"); // "r" mode for reading
} else {
    die("Error: The file does not exist");
}
?>
