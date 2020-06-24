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
        <div id="topnav"><h2 CLASS="signature">SMARTER</h2></div>
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

                <div id="divPreview">
                    头像：<img id="imgHeadPhoto" src="<?echo $_COOKIE["photo_address"] ?>" style="width: 160px; height: 170px; border: solid 1px #d2e2e2;"/>
                </div>
                <form method="post" action="验证跳转.php"  enctype="multipart/form-data">
                      <input type="file" name="file" onchange="PreviewImage(this,'imgHeadPhoto','divPreview');" size="20" /><br>
                    &nbsp;&nbsp;用户昵称：<input value="<? echo $_COOKIE["nickname"];?> " name="nickname" type="text"><br>
                    &nbsp;&nbsp;个性签名：<input value="<? echo $_COOKIE["signature"];?> " name="signature" type="text"><br>
                    <p>账号：&nbsp;&nbsp;<? echo $_COOKIE["userid"];?></p>
                    &nbsp;&nbsp;密码：&nbsp;&nbsp;&nbsp;&nbsp;<input value="<? echo $_COOKIE["password"];?> " name="password" type="text"><br>
                    &nbsp;&nbsp;手机号：&nbsp;<input value="<? if ($_COOKIE["phone_number"]!='0') echo $_COOKIE["phone_number"];?> " name="phone_number" type="text"><br>
                    &nbsp;&nbsp;邮箱：&nbsp;&nbsp;&nbsp;&nbsp;<input value="<? if($_COOKIE["email_address"]!='0') echo $_COOKIE["email_address"];?> " name="email" type="text"><br>
                    <p>注册时间：<? echo $_COOKIE["reg_date"];?></p>
                    <p>产品信息：</p>
                    <p>VIP信息：<? if($_COOKIE["vip"]!=0)
                        {echo "恭喜您，你是我们的VIP用户！";}
                        else
                        {
                            echo "您暂时还是不是我们的VIP用户";
                        }?></p>
                    <input type="submit" value="确定" ></form>
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
<script type="text/javascript">
    //js本地图片预览，兼容ie[6-9]、火狐、Chrome17+、Opera11+、Maxthon3
    function PreviewImage(fileObj, imgPreviewId, divPreviewId) {
        var allowExtention = ".jpg,.bmp,.gif,.png,.jfif,.jpeg"; //允许上传文件的后缀名document.getElementById("hfAllowPicSuffix").value;
        var extention = fileObj.value.substring(fileObj.value.lastIndexOf(".") + 1).toLowerCase();
        var browserVersion = window.navigator.userAgent.toUpperCase();
        if (allowExtention.indexOf(extention) > -1) {
            if (fileObj.files) {//HTML5实现预览，兼容chrome、火狐7+等
                if (window.FileReader) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        document.getElementById(imgPreviewId).setAttribute("src", e.target.result);
                    }
                    reader.readAsDataURL(fileObj.files[0]);
                } else if (browserVersion.indexOf("SAFARI") > -1) {
                    alert("不支持Safari6.0以下浏览器的图片预览!");
                }
            } else if (browserVersion.indexOf("MSIE") > -1) {
                if (browserVersion.indexOf("MSIE 6") > -1) {//ie6
                    document.getElementById(imgPreviewId).setAttribute("src", fileObj.value);
                } else {//ie[7-9]
                    fileObj.select();
                    if (browserVersion.indexOf("MSIE 9") > -1)
                        fileObj.blur(); //不加上document.selection.createRange().text在ie9会拒绝访问
                    var newPreview = document.getElementById(divPreviewId + "New");
                    if (newPreview == null) {
                        newPreview = document.createElement("div");
                        newPreview.setAttribute("id", divPreviewId + "New");
                        newPreview.style.width = document.getElementById(imgPreviewId).width + "px";
                        newPreview.style.height = document.getElementById(imgPreviewId).height + "px";
                        newPreview.style.border = "solid 1px #d2e2e2";
                    }
                    newPreview.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src='" + document.selection.createRange().text + "')";
                    var tempDivPreview = document.getElementById(divPreviewId);
                    tempDivPreview.parentNode.insertBefore(newPreview, tempDivPreview);
                    tempDivPreview.style.display = "none";
                }
            } else if (browserVersion.indexOf("FIREFOX") > -1) {//firefox
                var firefoxVersion = parseFloat(browserVersion.toLowerCase().match(/firefox\/([\d.]+)/)[1]);
                if (firefoxVersion < 7) {//firefox7以下版本
                    document.getElementById(imgPreviewId).setAttribute("src", fileObj.files[0].getAsDataURL());
                } else {//firefox7.0+
                    document.getElementById(imgPreviewId).setAttribute("src", window.URL.createObjectURL(fileObj.files[0]));
                }
            } else {
                document.getElementById(imgPreviewId).setAttribute("src", fileObj.value);
            }
        } else {
            alert("仅支持" + allowExtention + "为后缀名的文件!");
            fileObj.value = ""; //清空选中文件
            if (browserVersion.indexOf("MSIE") > -1) {
                fileObj.select();
                document.selection.clear();
            }
            fileObj.outerHTML = fileObj.outerHTML;
        }
        return fileObj.value;    //返回路径
    }
</script>

</html>



