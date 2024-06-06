<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //include 'headerAdmin.php'; ?>
    
    <?php 
        $conn = mysqli_connect("localhost","root","","olblx");
        $sql = "SELECT * FROM account";
        $res = mysqli_query($conn, $sql);
        echo "<table border='2px'>";
        echo "<thead>
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
                <td><button onclick="deleteAccount(`'.$row['username'].'`)">DELETE</button></td>
            ';
            echo "</tr>";
        }
        
        echo "</table>";
    ?>

    <div>
        <form action="XuLyPHP/XuLy.php" method="post">
            <input type="text" name="action" id="" value="themTK" hidden>
            <p>Thêm tài khoản</p>
            <p>Username <input type="text" name="username" id="" required></p>
            <p>Password <input type="password" name="password" id="" required></p>
            <p>Quyền Admin <input type="checkbox" name="admin" id=""></p>
            <input type="submit" name="" id="" value="Thêm tài khoản">
        </form>
    </div>

    <?php //include 'footer.php'; ?>
    <script>
        function edit(username){
            window.location.href = "editAccount.php?username="+username;
        }
        function deleteAccount(username){
            window.location.href = "XuLyPHP/XuLy.php?action=XoaAccount&username="+username;
        }
    </script>
</body>
</html>