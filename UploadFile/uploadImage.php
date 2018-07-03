<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 6/24/2018
 * Time: 10:12 AM
 */
//dinh dang thoi gian
date_default_timezone_set("Asia/Ho_Chi_Minh");

//thu muc chua file tren sever
$target_dir = "File/";

//path file da duoc upload tren server
$target_image = $target_dir.basename($_FILES['']['name']);

//mang chua nhung message error
$error = array();

//type file duoc phep tai len
$imageType = array("png","jpg","gif","jpeg");

//duoi cua file duoc upload
$imageFileType = strtolower(pathinfo($target_image,PATHINFO_EXTENSION));

if(isset($_POST["submit"]))
{
    //check choose file before click button Upload
    if(empty($_FILES["imageToUpload"]["tmp_name"]))
    {
        $error[] = "Please choose an image.";
    }
    //neu da nhap file vao roi
    else
    {
        //kiem tra file co phai la file image khong (bang cach kiem tra kich thuoc cua image)
        $checkImage = getimagesize($_FILES['imageToUpload']['tmp_name']);
        if($checkImage == 0)
        {
            $error[] = "File is not an image.";
        }

        //kiem tra file co ton tai chua
        if(file_exists($target_image))
        {
            $error [] = "Sory file is already exist. Please review file or rename file.";
        }

        //Kiem tra kieu file anh upload (chi cho nhung kieu file thuoc $imageType)
        if(!in_array($imageFileType,$imageType))
        {
            $error [] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }

        //kiem tra kich thuoc file nho hon 2mb
        if($_FILES['imageToUpload']['size'] > 2000000)
        {
            $error[] = "Sory! Your file is too large.";
        }
    }

    //Kiem tra lai lan cuoi nhung dieu kien tren co thoa man
    if(count($error) >0)
    {
        echo $error[0];
        ?>
        <html>
        <a href="uploadImage.html">Back</a>
        </html>
        <?php
        echo "<br>";
    }
    else
    {
        //chuyen file anh tu thu muc tam tren server vao thu muc File
        if(move_uploaded_file($_FILES["imageToUpload"]["tmp_name"],$target_image))
        {
            echo "The image '".$_FILES['imageToUpload']['name']."' has been uploaded<br>";
            echo "Type file: ".$imageFileType;
            echo "<br>";
            echo "File size: ".(round($_FILES["imageToUpload"]["size"]/1024,0))."KB";
            echo "<br>";
            echo date("Y/m/d H:i:s");

            ?>

            //click Back de quay lai file truoc
            <html>
            <a href="uploadImage.html">Back</a>
            </html>

            <?php
        }
        else
        {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

?>