<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="XuLyPHP/XuLy.php" method="post">
        <input type="text" name="action" id="" value="adminDoiMK" hidden>
        <p>Username <input type="text" name="username" id="" value="<?php echo $_GET['username'] ?>"></p>
        <p>New Password <input type="text" name="password" id="" required></p>
        <p>Quyền Admin <input type="checkbox" name="admin" id=""></p>
        <input type="submit" name="" id="" value="Thay đổi">
    </form>
</body>
</html>