<?php
    session_start();
?>

<?php
    unset($_SESSION['msg']);
    $conn = mysqli_connect("localhost","root","","olblx");
    if(isset($_POST['action'])){
        if($_POST['action'] == "login"){ // dang nhap
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "select * from account where username = '".$username."' and password = '".$password."'";
            $res = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($res);

            if($data["admin"] == 1 && $data["username"] == $username && $data["password"] == $password){
                unset($_SESSION['errorlg']);
                $_SESSION["username"] = "Admin";
                $_SESSION["admin"] = 1;
                header("location:../index.php");
            }
            else if($data["username"] == $username && $data["password"] == $password){
                unset($_SESSION['errorlg']);
                $_SESSION["username"] = $username;
                header("location:../index.php");
            }
            else{
                $_SESSION["errorlg"] = "Mật khẩu hoặc tài khoản chưa chính xác!";
                header("location:../index.php");
            }
        }else if($_POST['action'] == "register"){ // dang ki
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];

            $sqlselect = "select username from account where username = '".$username."'";
            $res = mysqli_query($conn, $sqlselect);
            $data = mysqli_fetch_assoc($res);
            if($data){
                header("location:../index.php");
                $_SESSION["errorlg"] = "Tài khoản đã tồn tại!";
            }else{
                $sqlinsert = "insert account(username, password, email) values ('".$username."','".$password."','".$email."')";
                mysqli_query($conn, $sqlinsert);
                header("location:../index.php");
            }
        }else if($_POST['action'] == "DoiMK"){
            $u = $_SESSION['username'];
            $mkc = $_POST['pass'];
            $mkm = $_POST['newpass'];
            $checkmkm = $_POST['newpasschk'];

            $conn = mysqli_connect("localhost","root","","olblx");

            $sql = "SELECT * FROM `account` WHERE username = '$u'";

            $result = mysqli_query($conn,$sql);
            if($row = mysqli_fetch_assoc($result)){
                $p = $row['password'];
                if($p == $mkc){
                    if($mkm == $checkmkm){
                        $update_sql = "UPDATE `account` SET `password` = '$mkm' WHERE username = '$u'";
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
        else if($_POST['action'] == "themCauHoi"){
            $chuong = $_POST["chuong"];
            $cauDiemLiet = $_POST["cauDiemLiet"] == "on" ? "1" : "2";
            $cauHoi = $_POST["cauhoi"];
            $dapan1 = $_POST["dapan1"];
            $dapan2 = $_POST["dapan2"];
            $dapan3 = $_POST["dapan3"];
            $dapan4 = $_POST["dapan4"];
            $dapandung = $_POST["dapandung"];
            
            $tenmorong = explode(".", $_FILES['img']['name']);
            $img = $tenmorong[0];

            $target_path = "C:/xampp\htdocs\OLBLX\Anh/" . basename($_FILES['img']['name']);
            if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path)){
                echo 'Success!';
            }else{
                echo 'Failed!';
                $img = 0;
            }

            $sql = "INSERT INTO `600_cau_hoi`(`chuong`, `cau_diem_liet`, `cauhoi`, `dapan1`, `dapan2`, `dapan3`, `dapan4`, `dapandung`, `img`) VALUES ('$chuong','$cauDiemLiet','$cauHoi','$dapan1','$dapan2','$dapan3','$dapan4','$dapandung','$img')";
            //mysqli_query($conn, $sql);
            $_SESSION['msg'] = "Thêm câu hỏi thành công";
            echo $sql;
            header("location:../suaLyThuyet.php");
        }else if($_POST['action'] == "themVideo"){
            $deso = $_POST['deso'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $dodai = $_POST['dodai'];
            $sql= "INSERT INTO `video_mo_phong`(`de`, `start`, `end`, `dodaivideo`) VALUES ('$deso','$start','$end','$dodai')";
            mysqli_query($conn, $sql);
            $target_path = "C:\xampp\htdocs\OLBLX\video\MoPhong/" . basename($_FILES['video']['name']);
            if(move_uploaded_file($_FILES['video']['tmp_name'], $target_path)){
                echo 'Success!';
            }else{
                echo 'Failed!';
            }
            $_SESSION['msg'] = "Thêm video thành công";
            header("location:../suaLyThuyet.php");
        }else if($_POST['action'] == "themDeLyThuyet"){
            $cau = "";  
            for($i = 1; $i <= 30; $i++){
                $cau .= $_POST["cau$i"]."-";
            }
            $cau = rtrim($cau, '-');
            $sql = "INSERT INTO `bodeonthiblx`(`cau`) VALUES ('$cau')";
            mysqli_query($conn, $sql);
            $_SESSION['msg'] = "Thêm đề lý thuyết thành công";
            header("location:../themDeLyThuyet.php");
        }else if($_POST['action'] == "themDeMoPhong"){
            $cau = "";
            for($i = 1; $i <= 10; $i++){
                $cau .= $_POST["cau$i"]."-";
            }
            $cau = rtrim($cau, '-');
            $sql = "INSERT INTO `bo_de_thi_mo_phong`(`cau`) VALUES ('$cau')";
            echo $sql;
            mysqli_query($conn, $sql);
            $_SESSION['msg'] = "Thêm đề mô phỏng thành công";
            header("location:../themDeLyThuyet.php");
        }else if($_POST['action'] == "themTK"){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $admin = isset($_POST['admin']) ? 1 : 0;
            $sql = "SELECT * FROM `account` WHERE username = '$username'";
            $res = mysqli_query($conn, $sql);
            if(mysqli_fetch_array($res)){
                $_SESSION['msg'] = "Đã có tài khoản có tên đăng nhập này";
                header("location:../quanLyTaiKhoan.php");
            }else{
                $sql = "INSERT INTO `account`(`username`, `password`, `admin`) VALUES ('$username','$password','$admin')";
                mysqli_query($conn, $sql);
                $_SESSION['msg'] = "Thêm tài khoản thành công";
                header("location:../quanLyTaiKhoan.php");
            }
            
        }else if($_POST['action'] == "adminDoiMK"){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $admin = isset($_POST['admin']) ? 1 : 0;
            if(isset($_POST['email']))
                $sql = "UPDATE `account` SET `password`='$password',`admin`='$admin',`email`='$email' WHERE `username` = '$username'";
            else
                $sql = "UPDATE `account` SET `password`='$password',`admin`='$admin' WHERE `username` = '$username'";
            mysqli_query($conn, $sql);
            $_SESSION['msg'] = "Đổi mật khẩu thành công thành công";
            header("location:../quanLyTaiKhoan.php");
        }else if($_POST['action'] == "themDiaDiem"){
            $tinh = $_POST['tinh'];
            $noiThi = $_POST['noiThi'];
            $diaChi = $_POST['diaChi'];
            $sdt = $_POST['sdt'];
            $sql = "INSERT INTO `dstinh`(`Tinh`, `Noi_Thi`, `Dia_Chi`, `SDT`) VALUES ('$tinh','$noiThi','$diaChi','$sdt')";
            mysqli_query($conn, $sql);
            $_SESSION['msg'] = "Thêm địa điểm thành công";
            header("location:../themDiaDiem.php");
        }
    }   

    if(isset($_GET['action'])){
        if($_GET['action'] == "logout"){
            session_destroy();
            header("location:../index.php");
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
        }else if($_GET['action'] == "XoaAccount"){
            $sql = "DELETE FROM `account` WHERE username = '".$_GET['username']."'";
            mysqli_query($conn,$sql);
            $_SESSION['msg'] = "Xóa account thành công";
            header("location:../quanLyTaiKhoan.php");
        }
    }
    mysqli_close($conn);
?>