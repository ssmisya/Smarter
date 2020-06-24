<?php
$euserid = $epassword = "";
if  ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $euserid =  test_input($_POST["userid"]);
    $epassword = test_input($_POST["password"]);
}
function test_input($data)
{
    $data=trim($data);
    $data =  stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$servername="localhost";
$username="root";
$password="";
$dname="ssmisya";

$conn=new mysqli($servername, $username, $password,$dname);
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$result =mysqli_query($conn,"SELECT * FROM MyGuests WHERE userid = $euserid");

if($row = mysqli_fetch_array($result))
{
    if($epassword==$row["password"])
    {
        SetCookie("userid",$euserid,time()+3600);
        SetCookie("password",$epassword,time()+3600);
        setcookie("photo_address",$row["image_address"],time()+3600);
        if($row["phone_number"]==NULL)
        {
            setcookie("phone_number",0,time()+3600);
        }
        else
        {
            setcookie("phone_number",$row["phone_number"],time()+3600);
        }
        if($row["email"]==NULL)
        {
            setcookie("email_address",0,time()+3600);
        }
        else
        {
            setcookie("email_address",$row["email"],time()+3600);
        }
        setcookie("nickname",$row["nickname"],time()+3600);
        setcookie("vip",$row["vip"],time()+3600);
        setcookie("signature",$row["signature"],time()+3600);
        setcookie("reg_date",$row["join_time"],time()+3600);
        echo "<script>alert('登陆成功！');</script>";
        $jump="个人主页.php";
    }
    else
    {
        echo "<script>alert('用户名或密码错误！');</script>";
        $jump="login.html";
    }
}
else
{
    echo "<script>alert('未找到该用户！');</script>";
    $jump="login.html";
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
    <title>个人主页</title>
</head>
<body>

</body>
</html>
