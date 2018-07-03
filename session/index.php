<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/23/2018
 * Time: 10:21 PM
 */

session_start();
if(isset($_SESSION['counter']))
{
    $_SESSION['counter'] += 1;
}
else
{
    $_SESSION['counter'] = 1;
}
$msg = "You access this website ".$_SESSION['counter']." times in this session";
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Set session</title>
</head>
<body>
    <?php echo $msg;?>
</body>
</html>

<?php
session_destroy();
if(!empty($_SESSION['counter']))
{
    echo "Session is not discard";
}
else
{
    echo "Session has been discard";
}
?>
