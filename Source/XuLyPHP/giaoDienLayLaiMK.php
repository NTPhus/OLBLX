<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy lại mật khẩu</title>
</head>
<body>
    <div>
        <?php
        $username;
        if(!isset($_GET['OTP']))
            if(!isset($_GET['email']))
                echo '
                <form action="giaoDienLayLaiMK.php" method="GET">
                    <div>
                        <input type="email" placeholder="Nhập email" name="email"> <br>
                        <input type="text" placeholder="Nhập tên tài khoản" name="user"><br>
                        <input type="submit" name="submit" value="Xác nhận">
                    </div>
                </form>
                ';
            else{
                $_SESSION['OTP'] = rand(1000, 9999);
                $_SESSION['tentaikhoan'] = $_GET['user'];
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
                } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
                }
                echo $_SESSION['OTP'];
                echo '
                <form action="giaoDienLayLaiMK.php" method="GET">
                    OTP <input type="text" name="OTP" id="">
                    <input type="submit">
                </form>
                ';
            }
        else if($_GET['OTP'] == $_SESSION['OTP']){
            $conn = mysqli_connect("localhost","root","","olblx");
            $str = "SELECT * FROM user WHERE username = '".$_SESSION['tentaikhoan']."'";
            $rs = mysqli_query($conn,$str);
            $row = mysqli_fetch_array($rs);
            echo "Mật khẩu của bạn là: ".$row['password'];
        }
        ?>
    </div>
</body>
</html>