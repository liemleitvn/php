<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/23/2018
 * Time: 11:09 PM
 */

session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
session_destroy();
header("location:login.html");
?>
</body>
</html>