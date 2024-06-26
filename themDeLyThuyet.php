<?php
    include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .app_themDe{
            position: relative;
            margin-bottom: 50px;
            z-index: 5;
        }
    .themDeLyThuyet,
    .themDeMoPhong {
    height: 500px;
    width: 48%; 
    margin: 10px; 
    display: inline-block; 
    vertical-align: top; /* căn đỉnh */
    background-color: #f9f9f9; 
    padding: 20px; 
    border-radius: 5px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
    overflow: scroll;
}
.themDeLyThuyet{
    margin-left: 70px;
    width: 600px;
    height: 650px;
}

.themDeMoPhong{
    margin-left: 50px;
    margin-right: 1px;
    width: 600px;
    height: 650px;
}


.themDeLyThuyet h1,
.themDeMoPhong h1 {
    text-align: center; 
    margin-bottom: 20px;
}

.themDeLyThuyet p,
.themDeMoPhong p {
    font-weight: bold; 
    margin-bottom: 5px; 
}

.themDeLyThuyet input[type="number"],
.themDeMoPhong input[type="number"] {
    width: 100%; 
    padding: 10px; 
    margin-bottom: 10px; 
    border: 1px solid #ccc;
    border-radius: 5px;
}

.themDeLyThuyet input[type="submit"],
.themDeMoPhong input[type="submit"] {
    width: 100%;
    padding: 10px; 
    border: none; 
    border-radius: 5px; 
    background-color: #007bff; 
    color: #fff; 
    cursor: pointer;
    transition: background-color 0.3s ease; 
}

.themDeLyThuyet input[type="submit"]:hover,
.themDeMoPhong input[type="submit"]:hover {
    background-color: #0056b3; 
}

.block{
    display: flex;
}

.app_themDe{
    display: inline-flex;
}
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="block">
    <?php include 'sidebar.php'?>
    <div class="app_themDe">
    <div class="themDeLyThuyet">
        
        <form action="XuLyPHP/XuLy.php" method="POST">
            <input type="text" name="action" id="" value="themDeLyThuyet" hidden>
            <h1 class="themDeLyThuyet_text">Đề B1</h1>
            <?php 
                for($i = 1; $i <= 30; $i++){
                    echo "<p>Câu $i</p>";
                    echo "<input type='number' name='cau$i' required>";
                }
            ?>
            <input type="submit" name="" id="themDeLyThuyetBtn" value="Thêm đề">
        </form>
    </div>
    
    <div class="themDeMoPhong">
        <form action="XuLyPHP/XuLy.php" method="POST">
            <input type="text" name="action" id="" value="themDeMoPhong" hidden>
            <h1 class="themDeMoPhong_text">Đề Mô phỏng</h1>
            <?php 
                for($i = 1; $i <= 10; $i++){
                    echo "<p>Câu $i</p>";
                    echo "<input type='number' name='cau$i' required>";
                }
            ?>
            <input type="submit" name="" id="themDeMoPhongBtn" value="Thêm đề">
        </form>
    </div>
    </div>
    </div>
    <script>
        document.getElementById("thmde").style.backgroundColor = "#0099FF";
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>