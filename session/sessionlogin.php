<?php
session_start();
?>
<html>
    <body>
        <h2>Enter username and Password</h2>
        <?php
        $msg=' ';
        if(isset($_POST['login']) && !empty($_POST['password'])){
            if($_POST['username']== 123 && $_POST['password']==123){
                $_SESSION['username'] = 123;
                echo "You have entered valid user name and password";
            }
            else{
                echo "invalid username and password";
            }
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            User name <input type="text" name="username"><br></br>
            Password <input type="password" name="password"><br></br>
            <button type="submit" name="login">Login</button>
            <h4><?php echo $msg ?></h4>

    </form>
    <a href="myprofile.php">My profile</a>
    <a href="sessionlogout.php">Logout</a>
    </body>
    </html>

    