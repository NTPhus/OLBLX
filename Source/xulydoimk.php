<?php
session_start();
$u = $_SESSION['user'];
$mkc = $_POST['mkcu'];
$mkm = $_POST['mkmoi'];
$checkmkm = $_POST['checkmkmoi'];

$conn = mysqli_connect("localhost","root","","olblx");

$sql = "SELECT * FROM `user` WHERE username = '$u'";

$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    $p = $row['password'];
    if($p == $mkc){
        if($mkm == $checkmkm){
            $update_sql = "UPDATE `user` SET `password` = '$mkm' WHERE username = '$u'";
            mysqli_query($conn,$update_sql);
            echo "Cập nhật thành công mật khẩu";
        }else{
            echo "Mật khẩu mới không giống nhau";
        }
    }else{
        echo "Mật khẩu cũ không chính xác";
    }
}else{
    echo "Không tồn tại người dùng này";
}
?>