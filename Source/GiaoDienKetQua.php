<?php 
    $rs = $_POST['result'];
    $ans = $_POST['answer'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $rs ?> / 30</h1>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "olblx");
        $sql = "INSERT INTO `lich_su_lam_bai`(`username`, `de`, `ketqua`, `dapan`) VALUES ('admin','1','$rs/30','$ans')";
        mysqli_query($conn, $sql);
    ?>
</body>
</html>