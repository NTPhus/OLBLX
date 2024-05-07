<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm ô tô</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="img/back.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>
    <!----------------------------- HEADER------------------------>
    <?php include 'header.php'?>
    <!-------------------------- CONTAINER---------------->
    <div class="container">
        <!-- FORM ĐĂNG NHẬP + ĐĂNG KÝ -->
            <div class="wrapper">
                <span class="icon_close"><i class="ri-close-line"></i></span>
                <!-- FORM ĐĂNG NHẬP --> 
                <div class="form-box login">
                             <!-- TIÊU ĐỀ -->
                             <h2>Đăng nhập</h2>
                        <form action="xulydangnhap.php" method="get">
                            <!-- NHẬP TÀI KHOẢN -->
                                <div class="input_box">
                                    <span class="icon"> <i class="ri-user-3-fill"></i></span>
                                    <input type="text" required name="username" placeholder="Tài khoản">
                                </div>

                            <!-- NHẬP MẬT KHẨU -->
                                <div class="input_box">
                                    <span class="icon"> <i class="ri-lock-2-fill"></i></span>
                                    <input type="password" required name="password" placeholder="Mật khẩu" >
                                </div>
                        
                             <!-- LƯU MẬT KHẨU + QUÊN MẬT KHẨU -->
                                <div class="Mat_khau">
                                        <label><input type="checkbox" name="" id=""> Lưu mật khẩu</label>
                                        <a href="#">Quên mật khẩu</a>
                                </div>
                        
                             <!-- NÚT ĐĂNG NHẬP -->
                                <button type="submit" class="btn">Đăng nhập</button>
                        
                              <!-- ĐƯỜNG DẪN ĐẾN FORM ĐĂNG KÝ -->
                                <div class="dk_tai_khoan">
                                    <p> Không có tài khoản?
                                        <a href="#" class = "link_dang_ky">Đăng ký</a>
                                    </p>
                                </div>
                                 <!-- BÁO LỖI-->
                                 <?php
                                if(isset($_SESSION["errorlg"])){
                                    echo '<script type="text/JavaScript">  
                                        alert("Mật khẩu hoặc tài khoản chưa chính xác!"); 
                                        </script>' 
                                    ;
                                    session_destroy();
                                }
                                ?>
                        </form>
                </div>


                <!-- FORM ĐĂNG KÝ -->
                <div class="form-box register">
                                <!-- TIÊU ĐỀ -->
                                <h2>Đăng ký</h2>
                        <form action="xulydangki.php" method="get">
                                <?php ?>
                                <!-- NHẬP TÊN TÀI KHOẢN -->
                                <div class="input_box">
                                    <span class="icon"> <i class="ri-user-3-fill"></i></span>
                                    <input type="text" required name="username" placeholder="Tên tài khoản" id="">
                                </div>

                                <!-- NHẬP MẬT KHẨU -->
                                <div class="input_box">
                                    <span class="icon"> <i class="ri-lock-2-fill"></i></span>
                                    <input type="password" required name="password" placeholder="Mật khẩu" id="password">
                                </div>

                                <!-- NHẬP LẠI MẬT KHẨU -->
                                <div class="input_box">
                                    <span class="icon"> <i class="ri-lock-2-fill"></i></span>
                                    <input type="password" required name="repassword" placeholder="Nhập lại mật khẩu" id="repassword" onchange="kiemTraMatKhau()">
                                </div>

                                <!-- NHẬP EMAIL XÁC NHẬN -->
                                <div class="input_box">
                                    <span class="icon"> <i class="ri-mail-fill"></i></span>
                                    <input type="email" required name="email" placeholder="Email xác nhận" id="">
                                </div>

                                <!-- TICK VÀO Ô ĐỒNG Ý -->
                                <div class="Mat_khau">
                                    <label><input type="checkbox" name="" id="chkdk" onclick="xuLyChonDongY()"> Đồng ý với các điều khoản</label>
                                </div>

                                <!-- NÚT ĐĂNG KÝ -->
                                <button type="submit" class="btn" id="rgt-btn" style="cursor: not-allowed;" disabled>Đăng ký</button>

                                <!-- ĐƯỜNG LINK FORM ĐĂNG NHẬP -->
                                <div class="dk_tai_khoan">
                                    <p> Bạn đã có tài khoản?
                                        <a href="#" class = "link_dang_nhap">Đăng nhập</a>
                                    </p>
                                </div>
                                <!-- BÁO LỖI-->
                                <?php
                                if(isset($_SESSION["error"])){
                                    echo '<script type="text/JavaScript">  
                                        alert("Tài khoản đã tồn tại!"); 
                                        </script>' 
                                    ;
                                    session_destroy();
                                }
                                ?>
                        </form>
                </div>
            </div>

            <div class="text-box">
                <form action="#"></form>
                    <h2 class = "h2-1 animated" >ÔN THI </h2> 
                        <h2 class = "h2-1 animated">LÁI XE  TRỰC TUYẾN</h2>
                    <p class="win"> Chiến thắng kỳ thi lý thuyết!</p>
                    <!-- <Button class = "btn-batdau">BẮT ĐẦU <i class="ri-arrow-right-line"></i></Button> 
                    -->
                    <a  href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        BẮT ĐẦU!
                    </a>
                  </form>
            </div>
    </div>

</body>
<script src="JS/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>