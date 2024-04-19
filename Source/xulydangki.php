<?php
    session_start();
?>

<?php
    $username = $_GET["username"];
    $password = $_GET["password"];
    $email = $_GET["email"];
    $conn = mysqli_connect("localhost","root","","olblx");
    $sqlselect = "select username from user where username = '".$username."'";
    $res = mysqli_query($conn, $sqlselect);
    $data = mysqli_fetch_assoc($res);
    if($data){
        header("location:start.php");
        $_SESSION["error"] = "Tài khoản đã tồn tại!";
    }else{
        $sqlinsert = "insert user(username, password, email) values ('".$username."','".$password."','".$email."')";
        mysqli_query($conn, $sqlinsert);
        header("location:start.php");
    }

    mysqli_close($conn);
?>