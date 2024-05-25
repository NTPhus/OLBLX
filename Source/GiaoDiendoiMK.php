<?php
    session_start();
?>
<?php
    $user = $_SESSION['username'];
?>

<script>
    function xulycheckbox() {
        var checkbox = document.getElementById('ok');
        if (!checkbox.checked) {
            alert("Bạn chưa xác nhận thay đổi.");
            return false;
        }
        return true;
    }
    if(<?php if(isset($_SESSION['msg'])) echo 'true'; else echo 'false'; ?>){
        alert("<?php echo $_SESSION['msg'] ?>");
        <?php unset($_SESSION['msg']) ?>
    }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/doimk.css">
</head>
<body>
    <div class="app_doiMatKhau">
        <form action="XuLyPHP/XuLy.php" method="POST" onsubmit="return xulycheckbox()">
        <div class="app_doiPass">
            <div class="doiMatKhau_text">
                <h3 id="text_Page">Change Password</h3>
            </div>
            <div class="app_doiPass_item">
                <input type="text" name="action" value="DoiMK" id="" hidden>
                <div class="taiKhoan">Xin chào: <?php echo $user ?></div>
                <div class="matKhau">Nhập mật khẩu cũ: <input type="password" name="pass" id="pass" placeholder=" "></div>
                <div class="matKhauMoi">Nhập mật khẩu mới: <input type="password" name="newpass" id="newpass" placeholder=" "></div>
                <div class="matKhauMoi">Nhập lại khẩu mới: <input type="password" name="newpasschk" id="newpass" placeholder=" "></div>
                <div class="xacNhan">Xác Nhận Sự Thay Đổi này: <input type="checkbox" name="check" id="ok"></div>
                <div class="submit"><input type="submit" value="Đổi Mật Khẩu" id="submit"></div>
                <div class="or">------------------Hoặc------------------</div>
                <div class="back"><a href="trangchu.php"> <input type="button" value="Back" id="back"></a></div>
            </div>
        </div>
    </form>
    </div>
</body>
</html>