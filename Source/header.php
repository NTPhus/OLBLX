<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <!-- LOGO -->
        <div class="logo">
        <a href="" ><img src="img/logo (2).png" alt="">THILAIXE.VN</a>
        </div>
        
        <nav class="navigation">
            
             <!-- THANH ĐIỀU HƯỚNG -->
             <ul>
                <!-- <li><a href="#">TRANG CHỦ</a></li>
                <li><a href="#">LUYỆN THI</a></li>
                <li><a href="#">LÝ THUYẾT</a></li>
                <li><a href="#">ĐỊA ĐIỂM</a></li> -->
                <?php
                    if(!isset($_SESSION["username"])){
                        echo "<li><button class='btnLogin-popup'>ĐĂNG NHẬP</button></li>";
                    } else{
                        // NÚT ĐĂNG XUẤT
                        echo "
                        <div class='form'>
                        "."<p class='user'>Xin chào, ".$_SESSION["username"]."</p>"."
                        <a class='dangxuat' href='xulydangxuat.php'>Đăng xuất</a>
                         </div>
                        ";
                    }                 
                ?>
            </ul> 
        </nav>  

    </header>
</body>
</html>