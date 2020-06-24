<?php
$file_type=$_FILES["file"]["type"];
$file_name=$_FILES["file"]["name"];
$userid=$_COOKIE["userid"];
$path="images/userphotographs/$userid/";
if ($file_type!="image/jpeg"&&$file_type!="image/jpg"&&$file_type!="image/png"&&$file_type!="image/gif"&&$file_type!="image/bmp"||($_FILES["file"]["size"] > 2000000))
{
echo "<script>alert('仅支持上传大小不超过2M的.jpg.png.bmp.gif格式的图片！');</script>";
    $jump="上传照片.php";
}
elseif($file_type==NULL)
{
    echo "<script>alert('请选择有效的图片进行上传！');</script>";
    $jump="上传照片.php";
}
elseif (file_exists("images/userphotographs/" . $_FILES["file"]["name"])&&$file_type!=NULL)
{
    echo "<script>alert( '该文件名已存在，请更名（建议以用户名命名）后重新上传！');</script>";
    $jump="上传照片.php";
}

else
{
    $quantity=getfilecounts($userid);
    $file_name_new=(string)(getfilecounts($userid)+1);
    /*for($i=(getfilecounts($userid));$i>=1;$i--)
    {
        $j=$i+1;
        $locate=getfilecounts($userid);
        $ii=(string)$i;
        $jj=(string)$j;
        rename("images/userphotographs/$userid/$ii.jpg","images/userphotographs/$userid/$jj.jpg");
    }*/
    move_uploaded_file($_FILES["file"]["tmp_name"],
        $path.$file_name_new.'.jpg');
    echo "<script>alert('上传成功！');</script>";
    $jump = "我的相册.php";
    /*
    $location=$path.$file_name;
    $servername="localhost";
    $username="root";
    $password="";
    $dname="photos";

    $conn=new mysqli($servername, $username, $password,$dname);
    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        $number = getfilecounts($userid) + 1;
        $review = test_input($_POST["review"]);
        $name = test_input($_POST["photo_name"]);
        $time = time();
        //echo "<script>alert('$location,$number,$review,$name,$time');</script>";
        $sql = "INSERT INTO $userid (number,name,address,time,review)
    VALUES ($number,$name,$location,$time,$review)";
        if ($conn->query($sql) == TRUE) {
            echo "<script>alert('上传成功！');</script>";
            $jump = "我的相册.php";
        } else {
            echo "<script>alert('数据库连接失败!');</script>";
            $jump = "上传照片.php";
        }
    }*/

}
function getfilecounts($ff){
    $dir = "images/userphotographs/$ff";
    $handle = opendir($dir);
    $n = 0;
    while(false !== $file=(readdir($handle))){
        if($file !== '.' && $file != '..')
        {
            $n++;
        }
    }
    closedir($handle);
    return $n;
}
function test_input($data)
{
    $data=trim($data);
    $data =  stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="refresh" content="0;url=<? echo $jump?>">
    <title>正在跳转</title>
</head>
<body>

</body>
</html>
