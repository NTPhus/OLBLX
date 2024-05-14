<?php
    session_start();
?>

<?php
    $conn = mysqli_connect("localhost","root","","olblx");
    if(isset($_POST['action']) || isset($_GET['action'])){
        if($_POST['action'] == "login"){ // dang nhap
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "select username, password from user where username = '".$username."' and password = '".$password."'";
            $res = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($res);

            if($data["username"] == $username && $data["password"] == $password){
                $_SESSION["username"] = $username;
                header("location:../start.php");
            }
            else{
                $_SESSION["errorlg"] = "Mật khẩu hoặc tài khoản chưa chính xác!";
                header("location:../start.php");
            }
        }else if($_POST['action'] == "register"){ // dang ki
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];

            $sqlselect = "select username from user where username = '".$username."'";
            $res = mysqli_query($conn, $sqlselect);
            $data = mysqli_fetch_assoc($res);
            if($data){
                header("location:../start.php");
                $_SESSION["errorlg"] = "Tài khoản đã tồn tại!";
            }else{
                $sqlinsert = "insert user(username, password, email) values ('".$username."','".$password."','".$email."')";
                mysqli_query($conn, $sqlinsert);
                header("location:../start.php");
            }
        }else if($_GET['action'] == "logout"){
            session_destroy();
            header("location:../start.php");
        }
    }






?>