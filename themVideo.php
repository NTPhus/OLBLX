<?php 
    include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
    <style>
   body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

form {
    background-color: #fff;
    width: 400px;
    margin: 20px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

form p {
    margin: 15px 0;
}

form input[type="text"],
form input[type="number"],
form input[type="file"],
form input[type="submit"] {
    width: calc(100% - 20px);
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

form input[type="text"]:focus,
form input[type="number"]:focus,
form input[type="file"]:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.block{
    display: flex;
}
    </style>
</head>
<body>
    <?php include 'header.php'?>
    <div class="block">
        <?php include 'sidebar.php'?>
        <form action="XuLy/XuLyPHP" method="POST" enctype="multipart/form-data">
        <p>Thêm video</p>
        <input type="text" value="themVideo" name="themVideo" id="" hidden>
        <input type="file" name="video" id="" accept="video/*">
        <p>Đề <input type="number" name="deso" id=""></p>
        <p>Bắt đầu tính điểm <input type="number" name="start"></p>
        <p>Kết thúc tính điểm <input type="number" name="end" id=""></p>
        <p>Độ dài video <input type="number" name="dodai" id=""></p>
        <input type="submit" name="" value="Thêm" id="">
        </form>
    </div>
    <?php include 'footer.php'?>
    <script>
        document.getElementById("thmvideo").style.backgroundColor = "#0099FF";
    </script>
</body>
</html>