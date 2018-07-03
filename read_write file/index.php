

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
/**
 * Created by Le Liem.
 * User: ASUS
 * Date: 6/22/2018
 * Time: 12:14 AM
 */

$filename = "Import.txt";
$f = fopen($filename,"r");
if($f == false)
{
    echo "Erorr in opening file";
    exit();
}

$i = 0;
while(!feof($f))
{
    $file[$i] = fgets($f);
    $i++;
    //$GLOBALS['arrayList']
}
if(!$file)
{
    echo "File empty";
}
else
{
    for($j = 0; $j < count($file); $j++)
    {
        $ar = explode(',',$file[$j]);
        for($k = 0; $k < count($ar); $k++)
        {
            echo $ar[$k];
            echo "\t\t";
        }
        echo "<br>";
    }
}
fclose($f);

$fi = fopen("Export.txt","w");
for ($i = 0; $i <count($file); $i++)
{
    fwrite($fi,$file[$i]);
}

?>

</body>
</html>
