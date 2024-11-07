<?php
session_start();
echo "the seesion is being created <br>";
echo "the session value is ",$_SESSION["USERNAME"];
?>
<html>
    <body>
        <a href="logoutsession.php">Log Out</a>
</body>
</html>