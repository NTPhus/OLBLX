<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
        }
    header{
    position: fixed;
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
    .logo a{
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
    .navigation ul li{
    display: inline-block;
    }
    .navigation li a{
    position: relative;
    font-size: 1.1rem;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin: 0 30px;
    }
    /* Tạo hiệu ứng dấu gạch chân cho các thành phần */
    .navigation a::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    /* 1 */
    transform: scaleX(0);
    /* tạo ra hiệu ứng xuất hiện từ trong ra ngoài với 0.5s */
    transition: transform .5s;
    }

/* 2 */
    .navigation a:hover::after
    {
    transform: scaleY(1);
    }
    
    ul.dropdown li{
     display: block;
    }

    ul li ul.dropdown{
  width: auto;
  text-align: left;
  position: absolute;
  /* z-index: 999; */
  display: none;
  background: #162938;
  margin: auto;
}
ul.dropdown li a{ 
    margin-top: 20px;

}
ul.dropdown li:nth-child(1)
{
    margin-top: 20px;
  padding: 20px 0;
  border-bottom: 1px solid #ccc;

}
ul.dropdown li:nth-child(2), ul.dropdown li:nth-child(3)
{
  padding: 20px 0;
  border-bottom: 1px solid #ccc;
}

ul li:hover ul.dropdown{
  display: block;
}


    </style>
</head>
<body>
<header>
        <!-- LOGO -->
        <div class="logo">
        <a href="" ><img src="img/logo (2).png" alt="">THILAIXE.VN</a>
        </div>
        
        <nav class="navigation">
             <!-- THANH ĐIỀU HƯỚNG -->
             <ul class="list">
                <li><a href="trangchu.php">TRANG CHỦ</a></li>
                <li>
                    <a href="#">THI THỬ</a>

                    <ul class="dropdown">
                        <li><a href="giaoDienTracNghiem.php">LÝ THUYẾT</a></li>
                        <li><a href="giaoDienMoPhong.php">MÔ PHỎNG</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">LUYỆN THI</a>

                    <ul class="dropdown">
                        <li><a href="chonDeLyThuyet.php">LÝ THUYẾT</a></li>
                        <li><a href="giaoDienThiMP.php">MÔ PHỎNG</a></li>
                    </ul>
                </li>
                <li><a href="giaoDienTimKiem.php">ĐỊA ĐIỂM</a></li>
                <?php
                    if(!isset($_SESSION["username"])){
                        echo "<li><button class='btnLogin-popup' onclick='dangnhap()'>ĐĂNG NHẬP</button></li>";
                    } else{
                        // NÚT ĐĂNG XUẤT
                        echo "
                        <li>
                        <a href='#'> TÀI KHOẢN </a>
                        <ul class='dropdown'>
                            <li><a href='giaoDienLichSuXemLai.php'>LỊCH SỬ LÀM BÀI</a></li>
                            <li><a href='#'>ĐỔI MẬT KHẨU</a></li>
                            <li><a href='XuLyPHP/XuLy.php?action=logout' class='dangxuat'>ĐĂNG XUẤT</a></li>
                        </ul>
                        </li>
                        ";
                    }                 
                ?>
                    

            </ul> 
        </nav>  

    </header>
    <script>
        function dangnhap(){
            window.location.href = "start.php";
        }
    </script>
</body>
</html>