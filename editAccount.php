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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .app_EditAccount {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        .app_EditAccount_element {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* background-image: url(./img/thinh2.jpg);
            background-repeat: no-repeat;
            background-position: center; */
        }

        form {
            width: 100%;
        }

        p {
            margin: 10px 0;
            width: 100%;
            display: flex;

            align-items: center;
        }

        p input[type="text"] {
            width: 60%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 17px;
        }

        p input[type="checkbox"] {
            margin-left: 25px;
            height: 30px;

        }
        p input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        p input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .userName, .newPass ,.email{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .userName input, .newPass input ,.email input{
            width: calc(100% - 120px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="app_EditAccount">
        <div class="app_EditAccount_element">
            <form action="XuLyPHP/XuLy.php" method="post">
                <input type="text" name="action" id="adminDoiMK" value="adminDoiMK" hidden>
                <input type="text" name="username" id="taiKhoan" value="<?php if(isset($_GET['username'])) echo $_GET['username'] ?>" hidden>
                <p class="userName">Username: <input type="text" name="username" id="taiKhoan" value="<?php if(isset($_GET['username'])) echo $_GET['username'] ?>" disabled></p>
                <p class="newPass">New Password: <input type="text" name="password" id="matKhauMoi" required></p>
                <p class="email">Email: <input type="text" name="email" id="email"></p>
                <p class="QuyenAdmin">Quyền Admin: <input type="checkbox" name="admin" id="Accept"></p>
                <p><input type="submit" name="" id="Change" value="Thay đổi"></p>
            </form>
        </div>
    </div>
</body>
</html>