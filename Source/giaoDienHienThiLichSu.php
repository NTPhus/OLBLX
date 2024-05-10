<?php include 'header.php'?>

<?php
$conn = mysqli_connect("localhost","root","","olblx");
$user = "admin";
$sql = "SELECT * FROM lich_su_lam_bai WHERE username = '$user'";
mysqli_query($conn,"SET NAMES 'utf8'");
$kq = mysqli_query($conn,$sql);
echo "<table border='1' align='center'>";
    echo "<tr><td align='center'><b>Ngày làm bài</b></td><td align='center'><b>Tên người dùng</b></td><td align='center'><b>Đề</b></td><td align='center'><b>Kết quả</b></td><td align='center'><b>Xem thêm</b></td></tr>";
    while($dong = mysqli_fetch_array($kq)){
        $mlb = $dong['MaLamBai'];
        echo "<tr><td>".$dong['ngaylambai']."</td><td>".$dong['username']."</td><td>".$dong['de']."</td><td>".$dong['ketqua']."</td><td><a href = 'giaoDienXemLai.php?code=$mlb'>Xem thêm chi tiết</a></td></tr>";
    }
echo "</table>";
mysqli_close($conn);
?>

<?php include 'footer.php'?>