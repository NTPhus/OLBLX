<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'headerAdmin.php'; ?>
    <div>
        
        <form action="XuLyPHP/XuLy.php" method="POST">
            <input type="text" name="action" id="" value="themDeLyThuyet" hidden>
            <h1>Đề B1</h1>
            <?php 
                for($i = 1; $i <= 30; $i++){
                    echo "<p>Câu $i</p>";
                    echo "<input type='number' name='cau$i'>";
                }
            ?>
            <input type="submit" name="" id="" value="Thêm đề">
        </form>
    </div>
    
    <div>
        <form action="XuLyPHP/XuLy.php" method="POST">
            <input type="text" name="action" id="" value="themDeMoPhong" hidden>
            <h1>Đề Mô phỏng</h1>
            <?php 
                for($i = 1; $i <= 10; $i++){
                    echo "<p>Câu $i</p>";
                    echo "<input type='number' name='cau$i'>";
                }
            ?>
            <input type="submit" name="" id="" value="Thêm đề">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>