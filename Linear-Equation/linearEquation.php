<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/24/2018
 * Time: 4:42 PM
 */

$error = array();
$result = "";
if(isset($_POST['submit']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];

    if($a==0 && $b == 0)
    {
        $error [] = "Please input a and b";
    }
    else
    {
        if($a ==0)//vo nghiem
        {
            $result = "No";
        }
        elseif ($b == 0)//vo so nghiem
        {
            $result = "Army";
        }
        else //co 1 nghiem
        {
            $result = (-$b)/$a;
        }
    }

}
else
{
    $error[] = "Error submit";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Linear Euqation</title>
    <style>
        table {
            width: 235px;
            margin: 100px auto;
        }

        table th {
            background: blue;
            padding: 10px;
            font-size: 18px;
        }

        #error {
            color: red;
        }
    </style>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <table>
        <thead>
        <tr>
            <th colspan="2">Calculate linear equation</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Input a:</td>
            <td><input type="text" name="a"></td>
        </tr>
        <tr>
            <td>Input b:</td>
            <td><input type="text" name="b"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="reset" name="reset" value="Cancel">
                <input type="submit" name="submit" value="Result">
            </td>
        </tr>
        <tr>
            <td>Result:</td>
            <td><input type="text" name="result" value="<?php if(!empty($result)) echo $result;?>" disabled></td>
        </tr>
        <tr>
            <td colspan="2" id="error"><?php if(!empty($error)) echo $error[0];?></td>
        </tr>
        </tbody>

    </table>
</form>
</body>
</html>
