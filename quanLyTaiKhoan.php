<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/quanLyTaiKhoan.css">
    <link rel="stylesheet" href="CSS/grid.css">
    <style>
        .suaTK{
            display: flex
        }

       .app_quanLyTK_edit{
            width: 1000px;
       }

        .app_quanLyTK_edit_table td{
            padding: 20px 40px;
        }
    </style>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="suaTK">
        <?php include 'sidebar.php'?>
        <div class="grid wide">
        <div class="row app_quanLyTK">
    <div class="col l-7 app_quanLyTK_edit">
    <?php 
        $conn = mysqli_connect("localhost","root","","olblx");
        $sql = "SELECT * FROM account";
        $res = mysqli_query($conn, $sql);
        echo "<table border='2px' class='app_quanLyTK_edit_table'>";
        echo "<thead class='app_quanLyTK_edit_table_col'>
                <td>Tài khoản</td>
                <td>Mật khẩu</td>
                <td>Quyền admin</td>
                <td colspan='2'>Chỉnh sửa</td>
            </thead>";
        while($row = mysqli_fetch_array($res)){
            $check = $row['admin'] == 1 ? "checked" : "";
            echo "<tr>";
            echo '
                <td>'.$row['username'].'</td>
                <td>'.$row['password'].'</td>
                <td><input type="checkbox" disabled '.$check.'></td>
                <td><button onclick="edit(`'.$row['username'].'`)">EDIT</button></td>
                <td><button onclick="deleteAccount(`'.$row['username'].'`)" id="btnDelete">DELETE</button></td>
            ';
            echo "</tr>";
        }
        
        echo "</table>";
    ?>
    </div>
    
    <div class="col l-5 app_quanLyTK_themTK">
        <h3 class="app_quanLyTK_themTK_element_text">Thêm Tài Khoản</h3>
        <form action="XuLyPHP/XuLy.php" method="post" class="app_quanLyTK_themTK_form">
        <div class="app_quanLyTK_themTK_element">
            <input type="text" name="action" value="themTK" hidden>
            <p class="pUsername">Username: <input type="text" name="username" id="username" required></p>
            <p class="pPassword">Password: <input type="password" name="password" id="password" required></p>
            <p class="pCheckAdmin">Quyền Admin: <input type="checkbox" name="admin" id="checkAdmin"></p>
            <p class="pAddAccount"><input type="submit" name="" id="addAccount" value="Thêm tài khoản"></p>
        </div>
        </form>
        
    </div>

            </div>
        </div>
    
    </div>
    
    <?php include 'footer.php'; ?>

    <script>
        function edit(username){
            window.location.href = "editAccount.php?username="+username;
        }
        function deleteAccount(username){
            window.location.href = "XuLyPHP/XuLy.php?action=XoaAccount&username="+username;
        }
        document.getElementById("qltk").style.backgroundColor = "#0099FF";
    </script>
</body>
</html>