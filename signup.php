<?php
header("Content-Type: text/html; charset=utf8");

if(!isset($_POST['submit'])){
    exit("错误执行");
}//判断是否有submit操作

$name=$_POST['name'];//post获取表单里的name
$password=$_POST['password'];//post获取表单里的password

include('connect.php');//链接数据库
//$q="insert into userlogin (id,username,password) values (NULL,'$name','$password')";//向数据库插入表单传来的值的sql
//$result=mysqli_query($conn,$q);//执行sql


$sql = "insert into userlogin (id,username,password) values (NULL,'$name','$password')";//向数据库插入表单传来的值的sql

if ($conn->query($sql) === TRUE) {
    echo "signup success";
    header("refresh:0;url=login.html");//如果成功跳转至login.html页面
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>