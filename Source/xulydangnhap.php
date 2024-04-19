<?php
    session_start();
?>

<?php
    $conn = mysqli_connect("localhost","root","","olblx");
    $username = $_GET["username"];
    $password = $_GET["password"];

    $sql = "select username, password from user where username = '".$username."' and password = '".$password."'";

    $res = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($res);

    if($data["username"] == $username && $data["password"] == $password){
        $_SESSION["username"] = $username;
        header("location:start.php");
    }else{
        $_SESSION["errorlg"] = "Mật khẩu hoặc tài khoản chưa chính xác!";
        header("location:start.php");
    }

    echo "Bực vl";
    mysqli_close($conn);
?>