<?php
/**
 * Created by Le Liem.
 * User: ASUS
 * Date: 6/21/2018
 * Time: 10:58 AM
 */
require_once "studentDto.php";

$id = $_POST["id"];
$name = $_POST["name"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$addr = $_POST["addr"];


$std = new  studentDto($id,$name,$birthday,$gender,$addr);
$student = $std->std();
asort($student);

echo "<br>";
foreach ($student as $key => $value)
{
    echo "[$key] => $value";
    echo "<br>";
}

