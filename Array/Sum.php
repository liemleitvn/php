<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/24/2018
 * Time: 5:25 PM
 */

if(isset($_POST['submit']))
{
    if(empty($_POST['arr']))
    {
        $error = "Please input array element";
    }
    else
    {
        $arr = explode( ",",$_POST['arr']);
        $result = 0;
        for($i = 0; $i < count($arr); $i ++)
        {
            $result += $arr[$i];
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Total of element in array</title>
    <style>
        table {
            /*width: chieu rong cua table*/
            /*margin: canh le trai cua table*/
            width: 300px;
            margin: 50px auto;
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
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table>
            <thead>
                <tr>
                    <th colspan="2"> Total of element</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Input array:</td>
                    <td><input type="text" name="arr" value="<?php if(!empty($_POST['arr'])) echo $_POST['arr'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="reset" value="Reset" name="reset">
                        <input type="submit" name="submit" value="Calculate">
                    </td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td><input type="text" name="result" value="<?php if(!empty($result)) echo $result;?>" disabled></td>
                </tr>
                <tr>
                    <td colspan="2" id="error"><?php if(!empty($error)) echo $error;?></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>


</html>
