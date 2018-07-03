<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/23/2018
 * Time: 11:09 PM
 */
session_start();
?>
<!DOCTYPE html>
<html xmlns>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Trang Quan Tri
<?php
if (isset($_SESSION['username']) && isset($_SESSION['password']))
{
    echo " <br> Welcome to ".$_SESSION['username'];
}

?>
<a href="logout.php" >Thoat ra </a>
</body>
</html>