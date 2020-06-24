<HTML>
<head>
    <title>Home</title>
    <link href="css/login.style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<div class="login">
    <h2>欢迎来到Smarter!</h2>
    <div class="login-top">
        <h1>用户登录</h1>
        <form id="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" id="userid" name="userid" value="User Id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Id';}">
            <input type="password" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
        </form>
        <div class="forgot">
            <a href="#">忘记密码？</a>
            <input form="login" type="submit" value="登录" >
        </div>
    </div>
    <div class="login-bottom">
        <h3>还没有账户？请<a href="#">点击这里</a>进行注册</h3>
        <br>
        <h3>或<a href="index.html">返回主页</a></h3>
    </div>
    <div>
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
        $result =mysqli_query($conn,"SELECT * FROM MyGuests WHERE userid = $euserid ");
            if($row = mysqli_fetch_array($result))
            {
                if($epassword==$row["password"])
                {
                    echo "<script>alert('登陆成功！');</script>";
                }
                else
                {
                    echo "<script>alert('用户名或密码错误！');</script>";
                }
            }
            else
            {
                echo "<script>alert('未找到该用户！');</script>";
            }
        ?>

    </div>
</div>
<div class="copyright">
    <p>Copyright &copy; 哈尔滨工业大学216小组 &nbsp;&nbsp;<a target="_blank" href="index.html">智能黑板</a></p>
</div>


</body>
</HTML>
