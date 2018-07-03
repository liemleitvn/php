<?php
/**
 * Created by Le Liem
 * User: ASUS
 * Date: 6/21/2018
 * Time: 12:04 AM
 */


$a = $_POST["a"];
$b = $_POST["b"];
$result = NULL;


if($a == 0)
{
    if($b == 0)
    {
        $result = "Vo so nghiem";
    }
    else
    {
        $result = "Vo nghiem";
    }
}
else
{
    if($b==0)
    {
        $result = "0";
    }
    else
    {
        $result = "x = ".round($b/$a,3);
    }
}

echo "a = $a <br>";
echo "b = $b <br>";
echo "Result: $result <br>";

