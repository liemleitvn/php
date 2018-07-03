<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/23/2018
 * Time: 11:05 PM
 */

session_start();

if(($_SERVER['REQUEST_METHOD']) == "POST") {
    if (!empty($_POST['username'] && !empty($_POST['password']))) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "Dang nhap thanh cong";
        ?>
        <html>
        <body>
        <a href="content.php">Continue</a>
        </body>
        </html>

        <?php
    }
    else
    {
        echo "Dang nhap khong thanh cong <br>";
        ?>

        <html>
        <body>
        <form action="login.html" method="post">
            <input type="submit" value="Back">
        </form>
        </body>
        </html>

        <?php
    }
}
?>
