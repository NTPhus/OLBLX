<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luyện Thi</title>
    <link rel="stylesheet" href="CSS/styleLT.css">
<body>
    <?php

        $conn = mysqli_connect("localhost", "root", "", "olblx");
        $sql = "SELECT * FROM `600_cau_hoi`";
        $res = mysqli_query($conn, $sql);
        
        $data = [];

        while($row = mysqli_fetch_array($res)){
            array_push($data,$row['cauhoi']);
            array_push($data,$row['img']);
            array_push($data,$row['dapan1']);
            array_push($data,$row['dapan2']);
            array_push($data,$row['dapan3']);
            array_push($data,$row['dapan4']);
            array_push($data,$row['dapandung']);
        }
    ?>
    <div class="container">
        <div class="content">
            <div class="cauhoi">
                <p id="cauHoi">Phú có đẹp trai không?</p>
                <img src="" alt="" hidden>
            </div>
            <div class="cacdapan">
                <div class="dapan" id="dapan1">Đáp án 1</div>
                <div class="dapan" id="dapan2">Đáp án 2</div>
                <div class="dapan" id="dapan3">Đáp án 3</div>
                <div class="dapan" id="dapan4">Đáp án 4</div>
            </div>
        </div>
        <div class="bottom-bar">
            <p id="countdown">30:00</p>
            <?php 
                for($i = 1; $i <= 25; $i++){
                   echo "<button class='btn' id='btn".$i."' onclick='ChuyenCau(".$i.")'>".$i."</button>";
                }
            ?>
        </div>
    </div>

    <!-- Đồng hồ đếm ngược -->
    <script src="JS/index.js"></script>
    <script type="text/javascript">
        //Khai báo object question 
        let questions = [{
            question: '<?php echo $data[0] ?>',
            img: '<?php echo $data[1] ?>',
            answers:{
                dapan1:'<?php echo $data[2] ?>',
                dapan2:'<?php echo $data[3] ?>',
                dapan3:'<?php echo $data[4] ?>',
                dapan4:'<?php echo $data[5] ?>',
            },
            correct: '<?php echo $data[6] ?>',
        }, ];
        // Gán biến data = array từ php
        let data = <?php echo json_encode($data)?>;
        // Gán array thành object
        for(let i=7; i<data.length;i+=7)
            questions.push({question:data[i],
            img:data[i+1],
            answers:{
                dapan1:data[i+2],
                dapan2:data[i+3],
                dapan3:data[i+4],
                dapan4:data[i+5],
            },
            correct: data[i+6],
            });
            document.getElementById("dapan4").hidden;
        //Thiết lập ban đầu
        let currentIndex = 0;
        function start(){
            let currentQuestion = questions[0];
            let answers = currentQuestion.answers;
            document.getElementById("cauHoi").innerHTML = currentQuestion.question;
            document.getElementById("dapan1").innerHTML = answers.dapan1;
            document.getElementById("dapan2").innerHTML = answers.dapan2;
            if(answers.dapan3 === "")
                document.getElementById("dapan3").style.display = "none";
            else{
                document.getElementById("dapan3").innerHTML = answers.dapan3;
                document.getElementById("dapan3").style.display = "block";
            }       
            if(answers.dapan4 === "")
                document.getElementById("dapan4").style.display = "none";
            else{
                document.getElementById("dapan4").innerHTML = answers.dapan4;
                document.getElementById("dapan4").style.display = "block";
            }
        }

        function ChuyenCau(cau){
            let currentQuestion = questions[cau];
            let answers = currentQuestion.answers;
            document.getElementById("cauHoi").innerHTML = currentQuestion.question;
            document.getElementById("dapan1").innerHTML = answers.dapan1;
            document.getElementById("dapan2").innerHTML = answers.dapan2;
            if(answers.dapan3 === "")
                document.getElementById("dapan3").style.display = "none";
            else{
                document.getElementById("dapan3").innerHTML = answers.dapan3;
                document.getElementById("dapan3").style.display = "block";
            }       
            if(answers.dapan4 === "")
                document.getElementById("dapan4").style.display = "none";
            else{
                document.getElementById("dapan4").innerHTML = answers.dapan4;
                document.getElementById("dapan4").style.display = "block";
            }
        }

        start();

    </script>
</body>
</html>