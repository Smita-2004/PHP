<?php
setcookie('user','cookie1',time()+60,'/');
?>
<html>
    <body>
        <?php
       
        if(isset($_COOKIE['user'])){
            echo "the cookie with name: ", $_COOKIE['user'], "is set";
        }
        else{
            echo "cookie is not set";
        }
        ?>
    </body>
</html>  