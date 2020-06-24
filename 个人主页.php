<?php
  if($_COOKIE["userid"]==NULL)
      {
          echo "<script>alert('请先登录!');</script>";
          $jump="login.html";
      }
  else
      {
          $jump="#";
          goto fu;
      }
  ?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="0;url=<?php echo $jump?>">
    <? fu: ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的主页</title>
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
                <a class="nav" href="diary.html">我的设备</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="我的相册.php">我的相册</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="message%20board.html">留言板</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="公告信息/notice01.php">公告信息</a>&nbsp;&nbsp;&nbsp;
                <a class="nav" href="个人信息.php">用户信息</a>&nbsp;&nbsp;&nbsp;
                <a href="#" class="nav">更多</a>&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>
    <div id="content">
        <div id="aside">
            <a href="个人主页.php" class="side"><img src="images/pingguo.png" alt="">主页</a>
            <a href="diary.html" class="side"><img src="images/caomei.png" alt="">我的设备</a>
            <a href="我的相册.php" class="side"><img src="images/jvzi.png" alt="">我的相册</a>
            <a href="message%20board.html" class="side"><img src="images/aixin.png" alt="">留言板</a>
            <a href="公告信息/notice01.php" class="side"><img src="images/meigui.png" alt="">公告信息</a>
            <a href="个人信息.php" class="side"><img src="images/xigua.png" alt="">用户信息</a>
            <a href="music.html" class="side"><img src="images/wuxing.png" alt="">音乐</a>
            <a href="" class="side"><img src="images/yaowan.png" alt="">更多</a>
        </div>
        <div id="main">
            <h3 id="t1">作者发：<a href="公告信息/notice01.php">2020-6-16 11:45</a></h3>
            <div id="dongtai">
                <h2>智能黑板官方运营团队公告</h2>
                <h3>2020-6-16 11:45</h3>
                <hr>
                <p>&nbsp;&nbsp;智能黑板官方网站及个人空间部分功能将从今天起开始内测，若有任何意见请与运营团队联系！</p>
                <p>&nbsp;&nbsp;欢迎各位前来批评指正！</p>
            </div>
        </div>
        <div id="right">
            <div id="r-upup"><h1>精选照片</h1></div>
            <div id="r-up">
                <br>
                <a href="images/userphotographs/<?php echo $_COOKIE["userid"];?>/1.jpg" ><img src="images/userphotographs/<?php echo $_COOKIE["userid"];?>/1.jpg" alt="" class="phs1">
                <a href="images/userphotographs/<?php echo $_COOKIE["userid"];?>/2.jpg" ><img src="images/userphotographs/<?php echo $_COOKIE["userid"];?>/2.jpg" alt="" class="phs">
                <a href="images/userphotographs/<?php echo $_COOKIE["userid"];?>/3.jpg" ><img src="images/userphotographs/<?php echo $_COOKIE["userid"];?>/3.jpg" alt="" class="phs">
                <a href="images/userphotographs/<?php echo $_COOKIE["userid"];?>/4.jpg" ><img src="images/userphotographs/<?php echo $_COOKIE["userid"];?>/4.jpg" alt="" class="phs2">
                <a href="images/userphotographs/<?php echo $_COOKIE["userid"];?>/5.jpg" ><img src="images/userphotographs/<?php echo $_COOKIE["userid"];?>/5.jpg" alt="" class="phs1">
                <a href="images/userphotographs/<?php echo $_COOKIE["userid"];?>/6.jpg" ><img src="images/userphotographs/<?php echo $_COOKIE["userid"];?>/6.jpg" alt="" class="phs">
            </div>
            <div id="r-bottom"></div>
        </div>
    </div>

    <div id="footer">版权所有  Copyright Reserved© 哈尔滨工业大学216小组</div>
</div>

</body>
</html>
