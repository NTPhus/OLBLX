<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm ô tô</title>
    <link rel="stylesheet" href="img/back.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="CSS/start.css">
</head>
<body>
    <!----------------------------- HEADER------------------------>
    <header>
        <!-- LOGO -->
        <div class="logo">
        <a href="" ><img src="img/logo (2).png" alt="">THILAIXE.VN</a>
        </div>
        
        <nav class="navigation">
            
             <!-- THANH ĐIỀU HƯỚNG -->
             <ul>
             <?php
                    if(!isset($_SESSION["username"])){
                        echo "<li><button class='btnLogin-popup'>ĐĂNG NHẬP</button></li>";
                    } else{
                        // NÚT ĐĂNG XUẤT
                        echo "
                        
                        "." <p class='user'>Xin chào, ".$_SESSION["username"]."</p> "."

                        <li><a href='XuLyPHP/XuLy.php?action=logout' class='dangxuat'>ĐĂNG XUẤT</a></li>
                        
                        ";
                    }                 
                ?>
                
            </ul> 
        </nav>  

    </header>
    <!-------------------------- CONTAINER---------------->
    <div class="container">
        <!-- FORM ĐĂNG NHẬP + ĐĂNG KÝ -->
            <div class="wrapper">
                <span class="icon_close"><i class="ri-close-line"></i></span>
                <!-- FORM ĐĂNG NHẬP --> 
                <div class="form-box login">
                             <!-- TIÊU ĐỀ -->
                             <h2>Đăng nhập</h2>
                        <form action="XuLyPHP/XuLy.php" method="post">
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
                                <input type="text" name="action" value="login" hidden>
                             <!-- NÚT ĐĂNG NHẬP -->
                                <button type="submit" class="btn">Đăng nhập</button>
                        
                              <!-- ĐƯỜNG DẪN ĐẾN FORM ĐĂNG KÝ -->
                                <div class="dk_tai_khoan">
                                    <p> Không có tài khoản?
                                        <a href="#" class = "link_dang_ky">Đăng ký</a>
                                    </p>
                                </div>
                                
                        </form>
                </div>


                <!-- FORM ĐĂNG KÝ -->
                <div class="form-box register">
                                <!-- TIÊU ĐỀ -->
                                <h2>Đăng ký</h2>
                        <form action="XuLyPHP/XuLy.php" method="post">
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
                                
                                <input type="text" name="action" value="register" hidden>

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
                    <a  href="#" onclick="AreLogin()" id="start">
                        BẮT ĐẦU!
                    </a>
                  </form>
            </div>
    </div>

   

     <!-- BÁO LỖI-->
    <div class="alert <?php if(isset($_SESSION["errorlg"])) echo 'showAlert'; else echo 'hide'?>">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg"><?php echo $_SESSION["errorlg"]?></span>
        <div class="close-btn">
        <span class="fas fa-times"></span>
        </div>
    </div>


</body>
<script>
    function AreLogin(){
        <?php
            if(isset($_SESSION["username"]))
                echo "let login = true;";
            else
                echo "let login = false;";
        ?>
        
        if(login){
            document.getElementById("start").setAttribute("href", "trangchu.php");
        }else{
            $('.alert').addClass("show");
            $('.alert').removeClass("hide");
            $('.alert').addClass("showAlert");
        }
    }

        $('.close-btn').click(function(){
            $('.alert').removeClass("show");
            $('.alert').addClass("hide");
        });
</script>
<script src="JS/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>