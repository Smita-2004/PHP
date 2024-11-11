<?php
session_start();
$_SESSION["USERNAME"]="TIWARI";
?>
<html>
    <body>
        <?php
        if(isset($_SESSION["USERNAME"])){
            echo "the session is created".$_SEESION["USERNAME"];
        }
        else{
            echo "The session is not set";
        }
        ?>
        <a></a>
    </body>
    </html?