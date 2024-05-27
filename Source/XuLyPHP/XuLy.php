<?php
    session_start();
?>

<?php
    $conn = mysqli_connect("localhost","root","","olblx");
    if(isset($_POST['action'])){
        if($_POST['action'] == "login"){ // dang nhap
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "select username, password from user where username = '".$username."' and password = '".$password."'";
            $res = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($res);

            if($data["username"] == $username && $data["password"] == $password){
                unset($_SESSION['errorlg']);
                $_SESSION["username"] = $username;
                header("location:../start.php");
            }
            else{
                $_SESSION["errorlg"] = "Mật khẩu hoặc tài khoản chưa chính xác!";
                header("location:../start.php");
            }
        }else if($_POST['action'] == "register"){ // dang ki
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];

            $sqlselect = "select username from user where username = '".$username."'";
            $res = mysqli_query($conn, $sqlselect);
            $data = mysqli_fetch_assoc($res);
            if($data){
                header("location:../start.php");
                $_SESSION["errorlg"] = "Tài khoản đã tồn tại!";
            }else{
                $sqlinsert = "insert user(username, password, email) values ('".$username."','".$password."','".$email."')";
                mysqli_query($conn, $sqlinsert);
                header("location:../start.php");
            }
        }else if($_POST['action'] == "DoiMK"){
            $u = $_SESSION['username'];
            $mkc = $_POST['pass'];
            $mkm = $_POST['newpass'];
            $checkmkm = $_POST['newpasschk'];

            $conn = mysqli_connect("localhost","root","","olblx");

            $sql = "SELECT * FROM `user` WHERE username = '$u'";

            $result = mysqli_query($conn,$sql);
            if($row = mysqli_fetch_assoc($result)){
                $p = $row['password'];
                if($p == $mkc){
                    if($mkm == $checkmkm){
                        $update_sql = "UPDATE `user` SET `password` = '$mkm' WHERE username = '$u'";
                        mysqli_query($conn,$update_sql);
                        $_SESSION['msg'] = "Cập nhật thành công mật khẩu";
                    }else{
                        $_SESSION['msg'] = "Mật khẩu mới không giống nhau";
                    }
                }else{
                    $_SESSION['msg'] = "Mật khẩu cũ không chính xác";
                }
            }
            header("location:../trangchu.php");
        }
    }   

    if(isset($_GET['action'])){
        if($_GET['action'] == "logout"){
            session_destroy();
            header("location:../start.php");
        }else if($_GET['action'] == "timkiem"){
            // Lấy dữ liệu từ yêu cầu AJAX
            $input = trim($_GET['q']);

            // Truy vấn SQL để lấy gợi ý từ cơ sở dữ liệu
            $sql = "SELECT * FROM dstinh WHERE Tinh LIKE '%$input%'";
            $result = mysqli_query($conn,$sql);

            if (mysqli_num_rows($result) > 0) {
                // Hiển thị các gợi ý
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='suggestion'> " .$row['Tinh'] . " </div>";
                }
            } else {
                echo "Không tìm thấy kết quả.";
            }
        }else if($_GET['action'] == "luuXemLai"){
            echo "Bực vl";
            $sql = "INSERT INTO `lich_su_lam_bai`(`ngaylambai`, `MaLamBai`, `username`, `de`, `ketqua`, `dapan`) VALUES ('".$_GET['NgayLamBai']."','".$_GET['MaLamBai']."','".$_SESSION['username']."','".$_GET['De']."','".$_GET['KetQua']."','".$_GET['DapAn']."')";
            mysqli_query($conn,$sql);
            header("location:../trangchu.php");
        }
    }
    mysqli_close($conn);
?>