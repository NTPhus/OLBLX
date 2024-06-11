<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .app_themDe{
            margin-bottom: 50px;
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
    margin-left: 15px;
}

.themDeMoPhong{
    margin-right: 1px;
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
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="app_themDe">
    <div class="themDeLyThuyet">
        
        <form action="XuLyPHP/XuLy.php" method="POST">
            <input type="text" name="action" id="" value="themDeLyThuyet" hidden>
            <h1 class="themDeLyThuyet_text">Đề B1</h1>
            <?php 
                for($i = 1; $i <= 30; $i++){
                    echo "<p>Câu $i</p>";
                    echo "<input type='number' name='cau$i'>";
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
                    echo "<input type='number' name='cau$i'>";
                }
            ?>
            <input type="submit" name="" id="themDeMoPhongBtn" value="Thêm đề">
        </form>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>