<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
     * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}

#giaoDienLichSuXemLai {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white; 
    width: 80%;
    max-width: 600px;
    height: 80%;
    max-height: 80%;
    overflow-y: auto;
    padding: 20px;
    border-radius: 10px;
    z-index: 1000;
    justify-content: flex-start;
    overflow: scroll;
    transition: transform 0.3 ease;
}

#giaoDienLichSuXemLai.show {
    transform: translate(-50%, -50%) scale(1);
}

header {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 8%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
    background: #162938;
    max-height: 80px;
}

.logo a {
    font-size: 1.5em;
    font-weight: 800;
    letter-spacing: 1px;
    color: #fff;
    user-select: none;
    text-decoration: none;
    align-items: center;
    justify-content: center;
    display: flex;
}
.logo a:hover{
    text-decoration: none;
    
}
.navigation ul li, #xemlai {
    display: inline-block;
}

.navigation li a {
    position: relative;
    font-size: 1.1rem;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin: 0 30px;
}

.navigation a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform: scaleX(0);
    transition: transform 0.5s;
}

.navigation a:hover::after {
    transform: scaleY(1);
}

ul.dropdown li {
    display: block;
}

ul li ul.dropdown{
    width: auto;
    text-align: left;
    position: absolute;
    display: none;
    background: #162938;
    margin: auto;
}

ul.dropdown li {

}

ul.dropdown li:nth-child(1) {
    margin-top: 20px;
    padding: 20px 0;
    border-bottom: 1px solid #ccc;
}

ul.dropdown li:nth-child(2) {
    padding: 20px 0;
    border-bottom: 1px solid #ccc;
}
 ul.dropdown li:nth-child(3){
    padding: 20px 0;
 }

ul li:hover ul.dropdown {
    display: block;
}

.giaoDienLichSuXemLai {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.ri-close-line:before {
    content: "\eb99";
    font-size: 20px;
}
#closeButton {
    align-self: flex-end;
    background-color: red;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    height: 40px;
    width: 40px;
    line-height: 40px;
}

#closeButton:hover {
    background-color: darkred;
}
#overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); 
    z-index: 999; 
}
body.no-scroll {
    overflow: hidden;
}
#ls{
    text-align: center;
}
table{
    width: 100%;
    border-collapse: collapse;
}
table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: center;
}



tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
    cursor: pointer;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
 #doiMK{
    border-bottom: 1px solid #ccc;
    cursor: pointer;
    
}

/* =========================doimk================== */
#app_doiMK{
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    width: 80%;
    max-width: 600px;
    height: 80%;
    max-height: 80%;
    padding: 20px;
    border-radius: 10px;
    z-index: 1000;
    transition: transform 0.3 ease
}
#app_doiMK.show {
    transform: translate(-50%, -50%) scale(1);
}

.app_doiMatKhau{
    height: 700px;
    display: none;
    justify-content: center;
    align-items: center;
}

.app_doiPass{
    background-image: url(img/bg.jpg);
    background-repeat: no-repeat;
    background-position: center;
    width:500px;
    height: 520px;
    border-radius: 15px;
    box-shadow: 0 0 10px #ccc;
}

#text_Page{
    font-size: 30px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    margin-left: 16%;
    font-family: math;
    letter-spacing: 3px;
    margin-left: 5%;
}

.app_doiPass_item{
    margin: 0 10px;
    padding: 0 20px;
}
.taiKhoan{
font-size: 25px;
padding-bottom: 10px;
font-weight: 700;
border-bottom: 1px solid;

}
.matKhau{
    margin-top: 20px;
    padding-bottom: 10px;

    font-size: 20px;
    border-bottom: 1px solid;

}

.matKhauMoi input, .matKhau input{
    border: 1px solid #BBBBBB;
    outline: none;
}
.matKhauMoi{
    margin-top: 20px;
    padding-bottom: 10px;

    font-size: 20px;
    border-bottom: 1px solid;
}
.matKhauMoi input[type="password"]{
    width: 250px;
    height: 24px;
    float: right;
    border-radius: 8px;
}
.or{
    text-align: center;
    margin-top: 10px;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-bottom: 1px solid;
}
#pass , #newpass {
    float: right;
    height: 23px;
    border-radius: 8px;
    font-size: 16px;
}
.xacNhan{
    margin-top: 20px;
}


#submit_btn{
    margin-top: 40px;
    width: 300px;
    height: 30px;
    border-radius: 15px;
    margin-left: 18%;
    padding: 20px 0;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    font-weight: 600;
    cursor: pointer;
    background: transparent;
    border: 1px solid #999999;

}

#submit_btn:hover{
    background: #33CCFF;
    border: none;
    box-shadow: 0 0 25px #03e9f4,
                0 0 25px #03e9f4,
                0 0 20px #03e9f4,
                0 0 20px #03e9f4;
}
.submit, .back{
    float: right;
    display: flex;
    justify-content: center;
}

#submit:hover, #back:hover{
    background-color: white;
    color: black;
}
a{
    text-decoration: none;
}
i.ri-close-large-line.close {
    position: fixed;
    top: 32px;
    right: 50px;
    width: 45px;
    height: 45px;
    font-size: 2em;
    color: #fff;
    background: #162938;
    /* * */
    display: flex;
    justify-content: center;
    align-items: center;
    /* * */
    /* bo góc dưới bên trái của nút close */
    border-bottom-left-radius: 20px;
    cursor: pointer;
    /* nổi nút close lên trên form để bấm */
    z-index: 1;
    border-top-right-radius: 15px;
}

i.ri-close-large-line.close:hover{
    background: #888888;
}
.error{
    color: RED;
}
/* ALert */
.alert{
            background: #00BFFF;
            padding: 20px 40px;
            min-width: 420px;
            position: absolute;
            right: 0;
            top: 10px;
            border-radius: 4px;
            border-left: 8px solid #00A5F5;
            overflow: hidden;
            z-index: 100;
        }
        .alert.showAlert{
            opacity: 1;
            pointer-events: auto;
        }
        .alert.show{
            animation: show_slide 1s ease forwards;
        }
        @keyframes show_slide {
        0%{
            transform: translateX(100%);
        }
        40%{
            transform: translateX(-10%);
        }
        80%{
            transform: translateX(0%);
        }
        100%{
            transform: translateX(-10px);
        }
        }
        .alert.hide{
            display: none;
        }

        .alert .fa-exclamation-circle{
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 30px;
        }
        .alert .msg{
            padding: 0 20px;
            font-size: 18px;
            color: #fff;
        }
        .alert .close-btn {
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translateY(-50%);
            background: #00A5F5;
            padding: 20px 18px;
            cursor: pointer;
        }
        .alert .close-btn:hover{
            background: #B0E0E6;
        }
        .alert .close-btn .fas{
            color: #fff;
            font-size: 22px;
            line-height: 40px;
        }

        /* design cho nút đăng nhập */
        .navigation .btnLogin-popup{
            width: 120px;
            height: 50px;
            /* làm cho button tệp vào trong */
            background: transparent; 
            border: 2px solid #fff;
            outline: none;
            /* bo góc button */
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1rem;
            color: #fff;
            font-weight: 500;
            margin-left: 40px;
            transition: .5s;
        }
</style>
</head>
<body>
    <div id="overlay" onclick="closeOverlay()"></div> <!-- Lớp phủ mờ -->
<header>
        <!-- LOGO -->
        <div class="logo">
        <a href="trangchu.php" ><img src="img/logo (2).png" alt="">THILAIXE.VN</a>
        </div>
        
        <nav class="navigation">
             <!-- THANH ĐIỀU HƯỚNG -->
             <ul class="list">
                <li><a href="trangchu.php">TRANG CHỦ</a></li>
                
                <li>
                    <a href="#">ÔN LUYỆN</a>

                    <ul class="dropdown">
                        <li><a href="giaoDienTracNghiem.php">LÝ THUYẾT</a></li>
                        <li><a href="giaoDienMoPhong.php">MÔ PHỎNG</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">THI THỬ</a>

                    <ul class="dropdown">
                    
                        <li><a href="chonDeLyThuyet.php">LÝ THUYẾT</a></li>
                        <li><a href="chonDeMoPhong.php">MÔ PHỎNG</a></li>
                    </ul>
                </li>
                
                <li><a href="giaoDienTimKiem.php">ĐỊA ĐIỂM</a></li>
                <?php
                    if(!isset($_SESSION["username"])){
                        echo "<li><button class='btnLogin-popup' onclick='dangnhap()'>ĐĂNG NHẬP</button></li>";
                    } else{
                        // NÚT ĐĂNG XUẤT
                        if(isset($_SESSION['admin']))
                            echo "
                            <li>
                            <a href='#'> TÀI KHOẢN </a>
                            <ul class='dropdown'>
                                <li onclick='quyenAdmin()' id='quyenAdmin'><a href='#'>QUYỀN ADMIN</a></li>
                                <li onclick='xemLaiLSThi()' id='xemlai'><a href='#'>XEM LỊCH SỬ THI</a></li>
                                <li><a href='XuLyPHP/XuLy.php?action=logout' class='dangxuat'>ĐĂNG XUẤT</a></li>
                            </ul>
                            </li>
                            ";
                        else
                            echo "
                            <li>
                            <a href='#'> TÀI KHOẢN </a>
                            <ul class='dropdown'>
                                <li onclick='xemLaiLSThi()' id='xemlai'><a href='#'>XEM LỊCH SỬ THI</a></li>
                                <li onclick='doiMatKhau()' id='doiMK'><a href='#'>ĐỔI MẬT KHẨU</a></li>
                                <li><a href='XuLyPHP/XuLy.php?action=logout' class='dangxuat'>ĐĂNG XUẤT</a></li>
                            </ul>
                            </li>
                            ";
                    }                 
                ?>
            </ul> 
        </nav>  

    <!-- BÁO LỖI-->
    <div class="alert <?php if(isset($_SESSION["msg"])) echo 'showAlert'; else echo 'hide'?>">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg" id="msg"><?php if(isset($_SESSION["msg"])){echo $_SESSION["msg"]; unset($_SESSION["msg"]);} ?></span>
        <div class="close-btn">
        <span class="fas fa-times"></span>
        </div>
    </div>

    </header>
    <script>

    $('.close-btn').click(function(){
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    });

     function xemLaiLSThi() {
    var overlay = document.getElementById('overlay');
    var lsModal = document.getElementById('giaoDienLichSuXemLai');
    overlay.style.display = 'block';
    lsModal.style.display = 'flex';
    document.body.classList.add('no-scroll'); // Ngăn cuộn trang chính
}

    function quyenAdmin(){
        window.location.href = "quanLyTaiKhoan.php";
    }

function closeOverlay() {
    var overlay = document.getElementById('overlay');
    var lsModal = document.getElementById('giaoDienLichSuXemLai');
    var mkModal = document.getElementById('app_doiMK');
    overlay.style.display = 'none';
    lsModal.style.display = 'none';
    mkModal.style.display = 'none';
    document.body.classList.remove('no-scroll'); // Cho phép cuộn trang chính
}

function closeDoiMK() {
    var overlay = document.getElementById('overlay');
    var mkModal = document.getElementById('app_doiMK');
    overlay.style.display = 'none';
    mkModal.style.display = 'none';
    document.body.classList.remove('no-scroll'); // Cho phép cuộn trang chính
}

function doiMatKhau() {
    var overlay = document.getElementById('overlay');
    var mkModal = document.getElementById('app_doiMK');
    overlay.style.display = 'block';
    mkModal.style.display = 'flex';
    document.body.classList.add('no-scroll'); // Ngăn cuộn trang chính
}

function dangnhap() {
    window.location.href = "index.php";
}
    </script>
<!-- ========================================================== -->

<div class="giaoDienLichSuXemLai" id="giaoDienLichSuXemLai">
    <button id="closeButton" onclick="closeOverlay()"><i class="ri-close-line"></i></button>
    <div id='ls'><h1>Lịch sử xem lại</h1></div>
    <div class="table">
        <?php
        $conn = mysqli_connect("localhost","root","","olblx");
        $user = $_SESSION['username'];
        $sql = "SELECT * FROM lich_su_lam_bai WHERE username = '$user'";
        mysqli_query($conn,"SET NAMES 'utf8'");
        $kq = mysqli_query($conn,$sql);
        if($dong = mysqli_fetch_array($kq)){
            echo "<table border='1' align='center'>";
            echo "<tr><td align='center'><b>Ngày làm bài</b></td><td align='center'><b>Tên người dùng</b></td><td align='center'><b>Đề</b></td><td align='center'><b>Kết quả</b></td><td align='center'><b>Xem thêm</b></td></tr>";
            $mlb = $dong['MaLamBai'];
            echo "<tr><td>".$dong['ngaylambai']."</td><td>".$dong['username']."</td><td>".$dong['de']."</td><td>".$dong['ketqua']."/30</td><td><a href = 'giaoDienXemLai.php?code=$mlb'>Xem thêm chi tiết</a></td></tr>";
            while($dong = mysqli_fetch_array($kq)){
                $mlb = $dong['MaLamBai'];
                echo "<tr><td>".$dong['ngaylambai']."</td><td>".$dong['username']."</td><td>".$dong['de']."</td><td>".$dong['ketqua']."/30</td><td><a href = 'giaoDienXemLai.php?code=$mlb'>Xem thêm chi tiết</a></td></tr>";
            }
            echo "</table>";
        }
        else echo "<h1>Chưa làm bài kiểm tra nào</h1>";
        mysqli_close($conn);
        ?>
    </div>
</div>


<!-- ============================DOIMK====================== -->
<div class="app_doiMatKhau" id="app_doiMK">   
        <div class="app_doiPass">
        <button id="closeButtonMK" onclick="closeDoiMK()"><i class="ri-close-large-line close"></i></button>
            <div class="doiMatKhau_text">
                <h3 id="text_Page">ĐỔI MẬT KHẨU</h3>
            </div>
            <form action="XuLyPHP/XuLy.php" method="POST">
            <div class="app_doiPass_item">
                <input type="text" name="action" value="DoiMK" id="" hidden>
                <div class="taiKhoan">Xin chào: <?php echo $_SESSION['username'] ?></div>
                <div class="matKhau">Nhập mật khẩu cũ: <input type="password" name="pass" id="pass" required autocomplete="off"></div>
                <div class="matKhauMoi">Nhập mật khẩu mới: <input type="password" name="newpass" id="newpass" required autocomplete="off"></div>
                <div class="matKhauMoi">Nhập lại khẩu mới: <input type="password" name="newpasschk" id="renewpass" required autocomplete="off"></div>
                <div class="xacNhan">Xác Nhận Sự Thay Đổi này: <input type="checkbox" name="check" id="ok"></div>
                <button id="submit_btn">Đổi mật khẩu</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>