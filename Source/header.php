<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/trangchu.css">
</head>
<body>
<header>
        <!-- LOGO -->
        <div class="logo">
        <a href="" ><img src="assets/img/logo (2).png" alt="">THILAIXE.VN</a>
        </div>
        
        <nav class="navigation">
             <!-- THANH ĐIỀU HƯỚNG -->
             <ul>
                <li><a href="trangchu.php">TRANG CHỦ</a></li>
                <li><a href="giaoDienTracNghiem.php">LÝ THUYẾT</a></li>
                <li><a href="giaoDienLuyenThi.php">LUYỆN THI</a></li>
                <li><a href="giaoDienMoPhong.php">LUYỆN THI MÔ PHỎNG</a></li>
                <li><a href="#">ĐỊA ĐIỂM</a></li>
                
                <?php
                    if(!isset($_SESSION["username"])){
                        echo "<li><button class='btnLogin-popup'>ĐĂNG NHẬP</button></li>";
                    } else{
                        // NÚT ĐĂNG XUẤT
                        echo "
                        <li>
                        "."<a href='#'>Xin chào, ".$_SESSION["username"]."</a>"."
                         </li>
                        ";
                    }                 
                ?>
            </ul> 
        </nav>  

    </header>
</body>
</html>