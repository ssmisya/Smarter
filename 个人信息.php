<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人空间|我的信息</title>
    <link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
<div id="container">
    <div id="header">
        <div id="topnav"><h2 CLASS="top—title">SMARTER</h2>  <h3><a  style="text-decoration: none;" href="退出登录.php" >退出登录</a>&nbsp;
                <a  style="text-decoration: none;" href="#" >设置</a></h3></div>
    </div>
    <div id="topblank1">
        <br>
        <h1 id="title">
            智能黑板
        </h1>
    </div>
    <div id="topblank2">
        <img class="t-pic" src=<?php echo $_COOKIE["photo_address"];?> alt="NULL" >
        <div id="name">
            <h1 class="nickname">&nbsp;&nbsp;<?php echo $_COOKIE["nickname"];?></h1>
            <br>
            <h3 CLASS="signature">个性签名：<?echo $_COOKIE["signature"];?></h3>
            <br>
            <div id="nav">&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="nav" href="个人主页.php">主页</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="#">我的设备</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="我的相册.php">我的相册</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="#">留言板</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="公告信息/notice01.php">公告信息</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="个人信息.php">用户信息</a>&nbsp;&nbsp;&nbsp;
                <a href="#" class="nav">更多</a>&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>
    <div id="content">
        <div id="aside">
            <a href="个人主页.php" class="side"><img src="images/pingguo.png" alt="">主页</a>
            <a href="#" class="side"><img src="images/caomei.png" alt="">我的设备</a>
            <a href="我的相册.php" class="side"><img src="images/jvzi.png" alt="">我的相册</a>
            <a href="#" class="side"><img src="images/aixin.png" alt="">留言板</a>
            <a href="公告信息/notice01.php" class="side"><img src="images/meigui.png" alt="">公告信息</a>
            <a href="个人信息.php" class="side"><img src="images/xigua.png" alt="">用户信息</a>
            <a href="#" class="side"><img src="images/wuxing.png" alt="">音乐</a>
            <a href="#" class="side"><img src="images/yaowan.png" alt="">更多</a>
        </div>
        <div id="main">
            <div id="information">
                <h2>个人信息</h2>
                <p>用户昵称：<? echo $_COOKIE["nickname"];?></p>
                <p>个性签名：<? echo $_COOKIE["signature"];?></p>
                <p>账号：<? echo $_COOKIE["userid"];?></p>
                <p>密码：<? echo $_COOKIE["password"];?></p>
                <p>手机号：<? if($_COOKIE["phone_number"]!=0)
                                    {echo $_COOKIE["phone_number"];}
                                    else
                                    {
                                        echo "未设置";
                                    }?>
                                                     "</p>
                <p>邮箱：<? if($_COOKIE["email_address"]!=0)
                    {echo $_COOKIE["email_address"];}
                    else
                    {
                        echo "未设置";
                    }?></p>
                <p>注册时间：<? echo $_COOKIE["reg_date"];?></p>
                <p>产品信息：</p>
                <p>VIP信息：<? if($_COOKIE["vip"]!=0)
                    {echo "恭喜您，你是我们的VIP用户！";}
                    else
                    {
                        echo "您暂时还是不是我们的VIP用户";
                    }?></p>
                <a href="修改信息.php">编辑信息</a>
            </div>
        </div>
        <div id="right">
            <div id="r-upup"><h1>精选照片</h1></div>
            <div id="r-up">
                <br>
                <a href="images/photos/1.jpg" ><img src="images/photos/1.jpg" class="phs1" alt=""></a>
                <a href="images/photos/2.jpg" ><img src="images/photos/2.jpg" class="phs"alt=""></a>
                <a href="images/photos/3.jpg" ><img src="images/photos/3.jpg" class="phs" alt=""></a>
                <a href="images/photos/4.jpg" ><img src="images/photos/4.jpg" class="phs2" alt=""></a>
                <a href="images/photos/5.jpg"><img src="images/photos/5.jpg" class="phs1" alt=""></a>
                <a href="images/photos/6.jpg"><img src="images/photos/6.jpg"  class="phs" alt="404"></a>
            </div>
            <div id="r-bottom"></div>
        </div>
    </div>

    <div id="footer">版权所有  Copyright Reserved© 哈尔滨工业大学216小组</div>
</div>

</body>
</html>
