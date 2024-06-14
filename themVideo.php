<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="block">
        <form action="XuLy/XuLyPHP" method="POST" enctype="multipart/form-data">
        <p>Thêm video</p>
        <input type="text" value="themVideo" name="themVideo" id="" hidden>
        <input type="file" name="video" id="" accept="video/*">
        <p>Đề <input type="number" name="deso" id=""></p>
        <p>Bắt đầu tính điểm <input type="number" name="start"></p>
        <p>kết thúc tính điểm <input type="number" name="end" id=""></p>
        <p>Độ dài video <input type="number" name="dodai" id=""></p>
        <input type="submit" name="" value="Thêm" id="">
        </form>
    </div>
    
</body>
</html>