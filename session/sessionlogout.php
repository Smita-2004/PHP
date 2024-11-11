<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
echo "You ahve been logged out from session";
?>