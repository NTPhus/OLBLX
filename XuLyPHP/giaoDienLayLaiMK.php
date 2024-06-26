<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy lại mật khẩu</title>
    <link rel="stylesheet" href="../CSS/layMK.css">
</head>
<body>
    <div class="app">
        <?php
        if(!isset($_GET['OTP']))
            if(!isset($_GET['email']))
                echo '
                <form action="giaoDienLayLaiMK.php" method="GET">
                    <div class="app_LayLaiMK">
                        <div class="app_layLaiMk_text"><h3 class="textPage">Lấy Lại Mật Khẩu</h3></div>
                        <div class="app_LayLaiMK_item">
                            <div class="email_text">Nhập email : <input type="email" name="email" id="email"></div>
                            <div class="taiKhooan_text">Nhập tên tài khoản: <input type="text" name="user" id="taiKhoan"> </div>

                            <div class="submit"><input type="submit" name="submit" value="Xác nhận" id="submit"></div>
                            <div class="or">------------Hoặc----------</div>
                            <a href="../index.php"><div class="back"><input type="button" value="Quay Lại" id="back"></div></a>
                        </div>
                    </div>
                </form>
                ';
            else{
                $_SESSION['OTP'] = rand(1000, 9999);
                $_SESSION['tentaikhoan'] = $_GET['user'];
                $conn = mysqli_connect("localhost","root","","olblx");
                $str = "SELECT * FROM account WHERE username='".$_GET['user']."'";
                $rs = mysqli_query($conn,$str);
                $row = mysqli_fetch_array($rs);

                $_SESSION['pass'] = $row['password'];
                if($row['email'] != $_GET['email']){
                    $_GET['email'] = "12@123";
                }

                require "PHPMailer-master/src/PHPMailer.php"; 
                require "PHPMailer-master/src/SMTP.php"; 
                require 'PHPMailer-master/src/Exception.php'; 
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                try {
                    $mail->SMTPDebug = 0;  // 0,1,2: chế độ debug
                    $mail->isSMTP();  
                    $mail->CharSet  = "utf-8";
                    $mail->Host = 'smtp.gmail.com'; //địa chỉ server
                    $mail->SMTPAuth = true; 
                    $mail->Username='phu444080@gmail.com';
                    $mail->Password = 'ziev bogo qxuo trdk'; // mật khẩu ứng dụng
                    $mail->SMTPSecure = 'ssl';   
                    $mail->Port = 465;              
                    $mail->setFrom('phu444080@gmail.com');
                    $mail->addAddress($_GET['email']); //mail người nhận  
                    $mail->isHTML(true);  
                    $mail->Subject = 'OTP xác nhận lấy lại mật khẩu';      
                    $mail->Body = nl2br("OTP của bạn là ".$_SESSION['OTP']); //nội dung thư
                    $mail->smtpConnect( array("ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )));
                    $mail->send();
                    echo '
                        <form action="giaoDienLayLaiMK.php" method="GET">
                            OTP <input type="text" name="OTP" id="">
                            <input type="submit">
                        </form>
                        ';
                } catch (Exception $e) {
                    echo 'Mail không gửi được.';
                }
                //echo $_SESSION['OTP'];
            }
        else if($_GET['OTP'] == $_SESSION['OTP']){
            echo "<p>Mật khẩu của bạn là: ".$_SESSION['pass']."</p>";
            echo "<br>";
            echo "<a href='/OLBLX/index.php'> Quay về trang chủ </a>";
            session_destroy();
        }
        ?>
    </div>
</body>
</html>