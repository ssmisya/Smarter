<?php
$enickname=$epassword=$esignature=$ephone=$eemail="";
$file_type=$_FILES["file"]["type"];
$userid= $_COOKIE["userid"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enickname = test_input($_POST["nickname"]);
    $epassword = test_input($_POST["password"]);
    $esignature = test_input($_POST["signature"]);
    $ephone = test_input($_POST["phone_number"]);
    $eemail = test_input($_POST["email"]);
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($file_type!=NULL&& $file_type!="image/jpeg"&&$file_type!="image/jpg"&&$file_type!="image/png"&&$file_type!="image/gif"&&$file_type!="image/bmp"||($_FILES["file"]["size"] > 2000000))
{
    echo "<script>alert('仅支持上传.jpg.png.bmp.gif格式的图片！');</script>";
    $jump="修改信息.php";
}
elseif (file_exists("images/userphotos/" . $_FILES["file"]["name"])&&$file_type!=NULL)
{
    echo "<script>alert( '该文件名已存在，请更名（建议以用户名命名）后重新上传！');</script>";
    $jump="修改信息.php";
}
/*elseif ($_FILES["file"]["error"] > 0)
    {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
        $jump="修改信息.php";
    }*/

elseif ($enickname==NULL||$epassword==NULL)
{
    echo "<script>alert('用户昵称密码不能为空！');</script>";
    $jump="修改信息.php";
}
elseif ($ephone!=NULL && strlen($ephone)!=11)
{
    echo "<script>alert('电话号码格式有误！');</script>";
    $jump="修改信息.php";
}

else
{
    if($file_type!=NULL) {
        unlink($_COOKIE["photo_address"]);
        move_uploaded_file($_FILES["file"]["tmp_name"],
            "images/userphotos/" . $_FILES["file"]["name"]);
    }
    $photoname=$_FILES["file"]["name"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dname = "ssmisya";

    $conn = new mysqli($servername, $username, $password, $dname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = mysqli_query($conn, "UPDATE MyGuests SET nickname = '$enickname'  WHERE userid= '$userid' ");
    $result = mysqli_query($conn, "UPDATE MyGuests SET signature = '$esignature'  WHERE userid= '$userid' ");
    $result = mysqli_query($conn, "UPDATE MyGuests SET phone_number= '$ephone'  WHERE userid= '$userid' ");
    $result = mysqli_query($conn, "UPDATE MyGuests SET email= '$eemail'  WHERE userid= '$userid' ");
    $result = mysqli_query($conn, "UPDATE MyGuests SET password = '$epassword'  WHERE userid= '$userid' ");
    if($file_type!=NULL) {
        $result = mysqli_query($conn, "UPDATE MyGuests SET image_address = 'images/userphotos/$photoname'  WHERE userid= '$userid' ");
        setcookie("photo_address","images/userphotos/$photoname",time()+3600);
    }
    echo "<script>alert('信息修改成功！');</script>";
    $jump="个人信息.php";
    if($ephone==NULL||$ephone==0)
    {
        setcookie("phone_number",0,time()+3600);
    }
    else
    {
        setcookie("phone_number",$ephone,time()+3600);
    }
    if ($eemail==NULL||$eemail==0)
    {
        setcookie("email_address",0,time()+3600);
    }
    else
    {
        setcookie("email_address",$eemail,time()+3600);
    }
    SetCookie("password",$epassword,time()+3600);
    setcookie("nickname",$enickname,time()+3600);
    setcookie("signature",$esignature,time()+3600);


}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="0;url=<?php echo $jump?>">
    <title>正在跳转</title>
</head>
<body>

</body>
</html>