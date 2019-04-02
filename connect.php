<?php
/**
 * Created by PhpStorm.
 * User: diere
 * Date: 2019/4/2
 * Time: 8:28
 */

   // $server="localhost";//主机
    $server="39.96.91.190";//主机
    $db_username="root";//你的数据库用户名
    $db_password="zfynb";//你的数据库密码
    $db_name = "myuserdb";
    $conn =  new mysqli($server,$db_username,$db_password,$db_name);//链接数据库
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    else{
        echo 'success';
    }

   // mysqli_select_db("user", $conn);
?>