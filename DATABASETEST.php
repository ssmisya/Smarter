<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dname="ssmisya";

    $conn=new mysqli($servername, $username, $password,$dname);
    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo "connect successfully";
    }
    //创建数据表
   /*$sql="CREATE TABLE MyGuests (
   number INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   userid VARCHAR(30) NOT NULL,
   password VARCHAR(30) NOT NULL,
   nickname VARCHAR(30) NOT NULL,
   signature VARCHAR(40) ,
   join_time VARCHAR(20),
   vip INT(1),
   email VARCHAR(30) ,
   phone_number INT(11),
   image_address VARCHAR(40),
   reg_date TIMESTAMP
   )";
    if($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
   */
    //创建数据
    $dexname='MyGuests';
    $xuhao='20161806';
    $number=5;
    $sql = "INSERT INTO $dexname (number, userid, password,nickname,signature,join_time,vip)
    VALUES ($number,$xuhao,'123456','smy','奥利给，干了兄弟们！','2020_06_15','1')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  //打印数据
/*
   $sql = "SELECT userid,password,nickname,signature FROM MyGuests";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // 输出每行数据
     while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["userid"]. "password:".$row["password"]. " Name: ". $row["nickname"]. "signature:". $row["signature"];
        }
    } else {
        echo "0 results";
    }*/
    /*mysqli_query($conn,"UPDATE MyGuests SET nickname = '雷泽'
    WHERE userid='1190200607'");*/


    $conn->close();
    ?>
