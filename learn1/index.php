<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>REQUEST</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" METHOD="post">
    Name <br>
    <input type="text" name = "name">
    <br>
    <br>
    <input type="reset" value="Reset" name="reset">
    <input type="submit" value="Submit" name="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = htmlspecialchars($_REQUEST['name']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

?>
</body>
</html>