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
        <form action="XuLyPHP/XuLy.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="action" value="themCauHoi" id="" hidden>
            <p>Thêm câu hỏi</p>
            <div>
                <p>Chương</p>
                <input type="number" name="chuong" id="">
                <p>Câu điểm liệt </p><input type="text" name="cauDiemLiet" id="">
                
            </div>
            <div>
                <p>Câu hỏi:</p>
                <input type="text" name="cauhoi">
            </div>
            <div>
                <div>
                    <p>Câu 1</p>
                    <input type="text" name="dapan1">
                </div>
                <div>
                    <p>Câu 2</p>
                    <input type="text" name="dapan2">
                </div>
                <div>
                    <p>Câu 3</p>
                    <input type="text" name="dapan3">
                </div>
                <div>
                    <p>Câu 4</p>
                    <input type="text" name="dapan4">
                </div>
                <div>
                    <p>Đáp án đúng</p>
                    <input type="number" name="dapandung">
                    <p>img: <input type="file" name="img"></p>
                    
                </div>
                <input type="submit" value="Thêm câu hỏi" name="submit">

            </div>
        </form>    
    </div>

   <div>
        <form action="XuLyPHP/XuLy.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="action" value="themVideo" id="" hidden>
                <p>Thêm video</p>
            <div>
                <p>Video</p>
                <input type="file" name="video">
                <p>Đề số <input type="number" name="deso" id=""></p>
                <p>Thời gian đạt điểm bắt đầu <input type="number" name="start" id=""></p>
                <p>Thời gian đạt điểm kết thúc <input type="number" name="end" id=""></p>
                <p>Độ dài video <input type="number" name="dodai" id=""></p>
            </div>
            <input type="submit" value="Thêm video" name="video">
        </form>
   </div>
    <?php include 'footer.php';?>
</body>
</html>