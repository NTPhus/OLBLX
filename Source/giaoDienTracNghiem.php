<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bực VL</title>
    <link rel="stylesheet" href="CSS/styleGDLT.css">
</head>
<body>
<form action="giaoDienTracNghiem.php" action="get">
<div class="container">
    <div class="item1">
        <?php

            try{
                $conn = mysqli_connect("localhost", "root", "", "olblx");
            }catch(mysqli_sql_exception){
                echo "Could not connected";
            } 

            if(!isset($_GET["key"]) && !isset($_GET["value"])){
                $sqldelete = "DELETE FROM `dapan`";
                mysqli_query($conn, $sqldelete);
            }
            if(isset($_GET["key"]) && $_GET["value"]){
                $select = "SELECT * FROM `dapan` WHERE cau = '".$_GET["key"]."'";
                $res = mysqli_query($conn, $select);
                if($data = mysqli_fetch_array($res)){
                    $update = "UPDATE `dapan` SET `da`='".$_GET["value"]."' WHERE `cau`='".$_GET["key"]."'";
                    mysqli_query($conn, $update);
                }else{
                    $insert = "INSERT INTO `dapan`(`cau`, `da`) VALUES ('".$_GET["key"]."','".$_GET["value"]."')";
                    mysqli_query($conn, $insert);
                }
            }
            for($i = 1; $i <= 100; $i++){
                echo "<button name='cau' class="."btn"." value=".$i." id="."btn".$i.">".$i."</button>";
            }
            
            $sqlgetAllAnswer = "SELECT * FROM `dapan`";
            $res = mysqli_query($conn, $sqlgetAllAnswer);
            while($data = mysqli_fetch_array($res)){
                if($data["da"] == "true")
                        echo "<script>document.getElementById('"."btn".$data["cau"]."').style.backgroundColor = 'green';</script>";
                    else if($data["da"] == "false")
                        echo "<script>document.getElementById('"."btn".$data["cau"]."').style.backgroundColor = 'red';</script>";
            }
        ?>
    </div>
    <div class="item2">

    <?php
    

    if(isset($_GET["cau"])){
        $cau = $_GET["cau"];
    }else{
        $cau = 1;
    }
        
    echo $cau."<br>";
    $sqlcauhoi = "select cauhoi, dapan1,dapan2,dapan3,dapan4,dapandung,img from 600_cau_hoi where cau = '".$cau."'";

    $res = mysqli_query($conn, $sqlcauhoi);

    $dapan = 1;
    while($data = mysqli_fetch_array($res, MYSQLI_ASSOC)){
        $cauhoifull = $data["cauhoi"];
        $dapan1 = $data["dapan1"];
        $dapan2 = $data["dapan2"];
        $dapan3 = $data["dapan3"];
        $dapan4 = $data["dapan4"];
        $dapandung = $data["dapandung"];
        $img = $data["img"];
    }

    ?>
        <div>
            <span>
                <p id="cauHoi"> <?php echo $cauhoifull."<br>"; ?></p>
            </span>
        </div>
        <?php
        
        if($img == 1) echo "<img src='"."Anh/Câu ".$cau.".png'".">"."<br>";
        if($dapan1 != "") echo "<div class='dapan' id='da1' onclick='chkkq(1,".$cau.")'>".$dapan1."<br>"."</div>";
        if($dapan2 != "") echo "<div class='dapan' id='da2' onclick='chkkq(2,".$cau.")'>".$dapan2."<br>"."</div>";
        if($dapan3 != "") echo "<div class='dapan' id='da3' onclick='chkkq(3,".$cau.")'>".$dapan3."<br>"."</div>";
        if($dapan4 != "") echo "<div class='dapan' id='da4' onclick='chkkq(4,".$cau.")'>".$dapan4."<br>"."</div>";
        ?>

        <button name="cau" value="<?php echo $cau-1?>" <?php if($cau == 1) echo "disabled"?> <?php ?>>previous</button>
        <button name="cau" value="<?php echo $cau+1?>" <?php if($cau == 600) echo "disabled"?>>Next</button>
        
        <div>
            <span id="da"></span>
        </div>

        <input type="text" name="key" id="key" value="<?php echo $cau?>" hidden>
        <input type="text" name="value" id="value" hidden>

    </div>
</div>
</form>
    <!-- Script -->
    <script>
        function chkkq(kq, cau){
            socau = <?php if($dapan4 != "") echo 5; else echo 4;?>;
            socau = <?php if($dapan3 != "") echo 4; else echo 3;?>;
            if(kq == <?php echo $dapandung ?>){
                // đổi hiệu ứng câu được chọn là đúng
                document.getElementById("da" + kq).style.backgroundColor = "lightgreen";
                document.getElementById("da" + kq).style.border = "4px solid green";
                document.getElementById("btn" + cau).style.backgroundColor = "green";
                // các câu còn loại ngoài câu được chọn được trở lại trạng thái ban đầu
               for(var i = 1; i < socau; i++){
                    if(i != <?php echo $dapandung?>){
                        document.getElementById("da" + i).style.backgroundColor = "aquamarine";
                        document.getElementById("da" + i).style.border = "none";
                    }
               }
               //Hiện thị kết quả và thay đổi giá trị input
                document.getElementById("da").innerHTML = "Chính xác";
                document.getElementById("value").setAttribute("value", "true");
                return true;
            }else{
                // đổi hiệu ứng câu được chọn là sai
                document.getElementById("da" + kq).style.backgroundColor = "antiquewhite";
                document.getElementById("da" + kq).style.border = "4px solid red";
                document.getElementById("btn" + cau).style.backgroundColor = "red";
                // các câu còn loại ngoài câu được chọn được trở lại trạng thái ban đầu
                for(var i = 1; i < socau; i++){
                    if(i != kq){
                        document.getElementById("da" + i).style.backgroundColor = "aquamarine";
                        document.getElementById("da" + i).style.border = "none";
                    }
               }
               //Hiện thị kết quả và thay đổi giá trị input
                document.getElementById("da").innerHTML = "Đáp án chưa chính xác";
                document.getElementById("value").setAttribute("value", "false");
                return false;
            }
        }
    </script>
</body>
</html>