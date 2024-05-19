<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding-top: 80px;
            align-items: center;
        }
        .table{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 700px;
        }
        td{
            font-size: 30px;
        }
    </style>
</head>
<body>
<?php  include 'header.php'?>

<div id='ls'><h1>Lịch sử xem lại</h1></div>

<div class="table">
    
<?php
$conn = mysqli_connect("localhost","root","","olblx");
$_SESSION['username'] = 'abc';
$user = $_SESSION['username'];
$sql = "SELECT * FROM lich_su_lam_bai WHERE username = '$user'";
mysqli_query($conn,"SET NAMES 'utf8'");
$kq = mysqli_query($conn,$sql);
if($dong = mysqli_fetch_array($kq)){
    
    echo "<table border='1' align='center'>";
    echo "<tr><td align='center'><b>Ngày làm bài</b></td><td align='center'><b>Tên người dùng</b></td><td align='center'><b>Đề</b></td><td align='center'><b>Kết quả</b></td><td align='center'><b>Xem thêm</b></td></tr>";
    $mlb = $dong['MaLamBai'];
    echo "<tr><td>".$dong['ngaylambai']."</td><td>".$dong['username']."</td><td>".$dong['de']."</td><td>".$dong['ketqua']."</td><td><a href = 'giaoDienXemLai.php?code=$mlb'>Xem thêm chi tiết</a></td></tr>";
    while($dong = mysqli_fetch_array($kq)){
        $mlb = $dong['MaLamBai'];
        echo "<tr><td>".$dong['ngaylambai']."</td><td>".$dong['username']."</td><td>".$dong['de']."</td><td>".$dong['ketqua']."</td><td><a href = 'giaoDienXemLai.php?code=$mlb'>Xem thêm chi tiết</a></td></tr>";
    }
    echo "</table>";
}
else echo "<h1>Chưa làm bài kiểm tra nào</h1>";
mysqli_close($conn);
?>
</div>


<?php include 'footer.php'?>
</body>
</html>
