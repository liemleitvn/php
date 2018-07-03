<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/23/2018
 * Time: 12:42 AM
 */

date_default_timezone_get("Asia/Ho_Chi_Minh");

//noi dat file duoc upload tren server
$target_dir = "File/";

//path cua file da duoc upload
$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
$checkEmpty = 1;//bien nay de kiem tra nguoi dung co chon file truoc khi submit chua
$error = array();//mang nay de luu nhung message bao loi
$fileType = array("jpg", "png","jpeg","gif"); //mang nay de so sanh voi phan mo rong cua file dua vao

//lay phan mo rong cua file upload
//ham pathinfor($path, PATHINFO_EXTENTION) de lay phan mo rong cua filepath
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//co the dung lenh sau de lay phan mo rong cua file
//$imageFileType = strtolower(end(explode(".",$_FILES['fileToUpload']['name'])));

//Kiem tra da submit chua
if(isset($_POST["submit"]))
{
    //Kiem tra da chon file chua
    if(empty($_FILES["fileToUpload"]["tmp_name"]))
    {
        $error[] = "Please choose an image <br>";
        $checkEmpty = 0;
    }

    //Kiem tra nguoi dung da chon file chua
    //Neu khong kiem tra thi viec gan $check se bi loi
    if($checkEmpty != 0)
    {
        //ham nay kiem tra neu file la image se tra ve kich thuoc cua image do
        //Neu khong se tra ve false
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check ==0)
        {
            $error[] = "File is not an image <br>";
        }
    }

}

//Kiem tra kieu file upload
if(!in_array($imageFileType,$fileType))
{
    $error[] =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>";
}

//Kiem tra file da ton tai tren server chua
if(file_exists($target_file))
{
    $error[] = "Sory! File already exist<br>";
}

//Kiem tra kich thuoc file up load (chi cho file co kich thuoc toi da 5MB
if($_FILES["fileToUpload"]["size"] > 5000000)
{
    $error[] = "Sory! Your file is too large <br>";
}

//Neu khong thoa man nhung dieu kien tren thi khong upload file
if(count($error) != 0)
{
    echo $error[0];
}
//Neu moi thu da duoc thoa man thi tien hanh upload file len server
else
{
    //Neu upload file hoan thanh thi ham move_uploaded_file se tra ve ket qua true
    //lenh nay co nghia la di chuyen file o bo nho tam tren server vao thu muc upload tren server
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
    {
        echo "The file ".$_FILES["fileToUpload"]["name"]." has been uploaded";
        echo "<br>";
        echo "File size: ".(round($_FILES["fileToUpload"]["size"]/1024,0))."KB";
        echo "<br>";
        echo "File type: ".$imageFileType;
        echo "<br>";
        echo "Date upload: ".date("Y/m/d H:i:s");
        ?>
        <html>
        <body>
        <a href="uploadImage.html">BACK</a>
        </body>
        </html>
<?php
    }
    else
    {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>

<!--<html>-->
<!--<form action="index.html">-->
<!--    <input type="submit" name="submit" value="Back">-->
<!--</form>-->
<!--</html>-->
