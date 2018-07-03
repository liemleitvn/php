<?php
/**
 * Created by Le Liem.
 * User: ASUS
 * Date: 6/23/2018
 * Time: 9:39 AM
 */

//Set mui gio
date_default_timezone_set('Asia/Ho_Chi_Minh');

//path file da duoc upload (phai dung tmp_name vi khi nay chi la upload tam len server thoi)
$target_file = "File/".basename($_FILES["fileUploadName"]["name"]);

//mang chua meassage loi
$error = array();

//lay type cua file upload
$typeFileUpload = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//kiem tra nguoi dung da submit chua
if(isset($_POST["submit"]))
{
    //kiem tra nguoi dung da chon file de gui chua
    if(empty($_FILES["fileUploadName"]['tmp_name']))
    {
        $error[] = "Please choose file.<br>";
    }

    //kiem tra size cua file
    if($_FILES["fileUploadName"]["size"] > 5000000)
    {
        $error[]= "Sory, your file is too lagre. <br>";
    }

    //kiem tra file co ton tai tren server chua
    if(file_exists($target_file))
    {
        $error[] = "File is already exist <br>";
    }

    //Kiem tra lai cac dieu kien tren co thoa man truoc khi upload
    if(count($error) > 0)
    {
        echo $error[0];
    }
    elseif (move_uploaded_file($_FILES["fileUploadName"]["tmp_name"],$target_file))
    {
        echo  "The file ".$_FILES["fileUploadName"]["name"]." has been uploaded.<br>";
        echo  "The file size: ".round($_FILES["fileUploadName"]["size"]/1024,0). "KB <br>";
        echo  "File type: ".$typeFileUpload.". <br>";
        echo  "Date upload: ".date('Y/m/d H:i:s')." .<br>";

    }
}

header("Location: uploadFile.html");
?>

<!--<html>-->
<!--<body>-->
<!--    <form action="uploadFile.html">-->
<!--        <input type="submit" value="Back">-->
<!--    </form>-->
<!--</body>-->
<!--</html>-->

