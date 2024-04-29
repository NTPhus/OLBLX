<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luyện Thi</title>
    <link rel="stylesheet" href="CSS/styleGDT.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () {
            null
        };
    </script>
</head>
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
    <form action="GiaoDienKetQua.php" method="POST">
        <div class="container">
            <div class="content">
                <div class="cauhoi">
                    <p id="cauHoi">Phú có đẹp trai không?</p>
                    <img src="" alt="" id="img">
                </div>
                <div class="cacdapan">
                    <div class="dapan" id="dapan1" onclick="check(1)">Đáp án 1</div>
                    <div class="dapan" id="dapan2" onclick="check(2)">Đáp án 2</div>
                    <div class="dapan" id="dapan3" onclick="check(3)">Đáp án 3</div>
                    <div class="dapan" id="dapan4" onclick="check(4)">Đáp án 4</div>
                </div>
            </div>
            <div class="bottom-bar">
                <p id="countdown">30:00</p>
                <?php 
                    for($i = 1; $i <= 25; $i++){
                        echo "<div class='btn' id='btn".$i."' onclick='ChuyenCau(".$i.")'>".$i."</div>";
                    }
                ?>
                <input type="text" id="result" name="result" value="0" hidden>
                <button type="submit" id="submit">Submit</button>
            </div>
        </div>
    </form>
    

    <!-- Đồng hồ đếm ngược -->
    <script src="JS/index.js"></script>
    <script type="text/javascript">
        // Gán biến data = array từ php
        let data = <?php echo json_encode($data)?>;
        //Khai báo object question 
        let questions = [{
            question: data[0] ,
            img: data[1] ,
            answers:{
                dapan1:data[2],
                dapan2:data[3],
                dapan3:data[4] ,
                dapan4:data[5],
            },
            correct: data[6],
        }, ];
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
        let currentIndex = 1;
        let Answer = [];
        function start(){
            let currentQuestion = questions[0];
            let answers = currentQuestion.answers;
            document.getElementById("cauHoi").innerHTML = currentIndex + ". " + currentQuestion.question;
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                document.getElementById("img").style.display = "none";
            }
            else if(currentQuestion.img == '1'){
                document.getElementById("img").style.display = "block";
                document.getElementById("img").setAttribute("src", "Anh/Câu "+(currentIndex)+".png");
            }
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
            currentIndex = cau;
            let currentQuestion = questions[currentIndex-1];
            let answers = currentQuestion.answers;
            document.getElementById("cauHoi").innerHTML = currentIndex + ". " + currentQuestion.question;
            document.getElementById("dapan1").style.backgroundColor = "cadetblue";
            document.getElementById("dapan2").style.backgroundColor = "cadetblue";
            document.getElementById("dapan3").style.backgroundColor = "cadetblue";
            document.getElementById("dapan4").style.backgroundColor = "cadetblue";
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                document.getElementById("img").style.display = "none";
            }
            else if(currentQuestion.img == '1'){
                document.getElementById("img").style.display = "block";
                document.getElementById("img").setAttribute("src", "Anh/Câu "+(currentIndex)+".png");
            }
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

        function check(cau){
            let currentQuestion = questions[currentIndex-1];
            let correctAnswers = currentQuestion.correct;
            document.getElementById("dapan1").style.backgroundColor = "cadetblue";
            document.getElementById("dapan2").style.backgroundColor = "cadetblue";
            document.getElementById("dapan3").style.backgroundColor = "cadetblue";
            document.getElementById("dapan4").style.backgroundColor = "cadetblue";
            document.getElementById("dapan"+cau).style.backgroundColor = "orange";
            document.getElementById("btn"+currentIndex).style.backgroundColor = "yellow";
            Answer[currentIndex] = correctAnswers == cau ? 1 : 0;
            let count = 0;
            for(let i = 1; i <= 25; i++){
                if(Answer[i] == 1) count++;
            }
            document.getElementById("result").setAttribute('value',count);
        }

        start();

    </script>
</body>
</html>