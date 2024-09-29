<?php
$str1 = "Secure";
$str2 = "Password";
$str3 = "Generator";

// Convert strings to lowercase
$str1 = strtolower($str1);
$str2 = strtolower($str2);
$str3 = strtolower($str3);

// Get first three characters of each string
$a = substr($str1, 0, 3);
$b = substr($str2, 0, 3);
$c = substr($str3, 0, 3);

// Concatenate the substrings and convert to uppercase
$pass = strtoupper($a . $b . $c);

// Replace 'S' with '$' in the password
$pass = str_replace('S', '$', $pass);

// Get the length of the password after modification
$len = strlen($pass);

// Output the generated password and its length
echo "Generated password: " . $pass . "\n";
echo "Password length: " . $len . "\n";
?>