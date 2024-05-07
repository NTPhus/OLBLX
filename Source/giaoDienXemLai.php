<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem lại bài</title>
    <link rel="stylesheet" href="CSS/GDLT.css">
</head>
<body>
    <?php
    $data = [];
    $de = [];
    $conn = mysqli_connect("localhost", "root", "", "olblx");
    $sql = "SELECT * FROM `bodeonthiblx` where DeSo = 1";
    $res = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_array($res)){
        for($i = 1; $i <= 30; $i++){
            array_push($de, $row["cau$i"]);
        }
    }
    
    $conn = mysqli_connect("localhost", "root", "", "olblx");
    foreach($de as $cau){
        $sql = "SELECT * FROM `600_cau_hoi` where cau = '$cau'";
        $res = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_array($res)){
            array_push($data,$row['cauhoi']);
            array_push($data,$row['img']);
            array_push($data,$row['dapan1']);
            array_push($data,$row['dapan2']);
            array_push($data,$row['dapan3']);
            array_push($data,$row['dapan4']);
            array_push($data,$row['dapandung']);
        }
    }

    $mlb = "m1";
    $sql = "SELECT * FROM `lich_su_lam_bai` WHERE MaLamBai = '$mlb'";
    $res = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_array($res)){
        $baiLamCu = $row['dapan'];
    }

    ?>
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
                <?php 
                    for($i = 1; $i <= 30; $i++){
                        echo "<div class='btn' id='btn".$i."' onclick='ChuyenCau(".$i.")'>".$i."</div>";
                    }
                ?>
            </div>
        </div>
    

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

        //Thiết lập ban đầu
        let currentIndex = 1; // so cau hien tai
        let Answer = []; // so cau dung sai
        let Choice = []; // arr check da lam cau hoi do chua
        
        function ChayBaiLamCu(){
            let blc = "<?php echo $baiLamCu ?>";
            let arr = [];

            for(let i = 1; i <= 30; i++){
                index = blc.indexOf('-');
                Choice[i] = blc[index-1];
                check(Choice[i]);
                currentIndex++;
                blc = blc.substr(index+1);
            }
            currentIndex = 1;
        }
        
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
            //kiem tra cau hoi nay co dapan3 khong
            if(answers.dapan3 === "")
                document.getElementById("dapan3").style.display = "none";
            else{
                document.getElementById("dapan3").innerHTML = answers.dapan3;
                document.getElementById("dapan3").style.display = "block";
            }     
            //kiem tra cau hoi nay co dapan4 khong  
            if(answers.dapan4 === "")
                document.getElementById("dapan4").style.display = "none";
            else{
                document.getElementById("dapan4").innerHTML = answers.dapan4;
                document.getElementById("dapan4").style.display = "block";
            }
            ChayBaiLamCu();
        }

        function ChuyenCau(cau){
            currentIndex = cau;
            let currentQuestion = questions[currentIndex-1];
            let answers = currentQuestion.answers;
            document.getElementById("cauHoi").innerHTML = currentIndex + ". " + currentQuestion.question;
            //reset cac lua chon truoc
            document.getElementById("dapan1").style.backgroundColor = "cadetblue";
            document.getElementById("dapan2").style.backgroundColor = "cadetblue";
            document.getElementById("dapan3").style.backgroundColor = "cadetblue";
            document.getElementById("dapan4").style.backgroundColor = "cadetblue";
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                document.getElementById("img").style.display = "none";
            }
            else{
                document.getElementById("img").style.display = "block";
                document.getElementById("img").setAttribute("src", "Anh/Câu "+currentQuestion.img+".png");
            }
            //Hien thi dap an len man hinh
            document.getElementById("dapan1").innerHTML = answers.dapan1;
            document.getElementById("dapan2").innerHTML = answers.dapan2;
            //kiem tra cau hoi nay co dapan3 khong
            if(answers.dapan3 === "")
                document.getElementById("dapan3").style.display = "none";
            else{
                document.getElementById("dapan3").innerHTML = answers.dapan3;
                document.getElementById("dapan3").style.display = "block";
            }       
            //kiem tra cau hoi nay co dapan4 khong
            if(answers.dapan4 === "")
                document.getElementById("dapan4").style.display = "none";
            else{
                document.getElementById("dapan4").innerHTML = answers.dapan4;
                document.getElementById("dapan4").style.display = "block";
            }
            //Neu cau nay da lam truoc do
            if(Choice[cau] != null) check(Choice[cau]);
        }
        //kiem tra cau dung sai va danh dau cau
        function check(cau){
            let currentQuestion = questions[currentIndex-1];
            let correctAnswers = currentQuestion.correct;
            //reset cac lua chon truoc do
            document.getElementById("dapan1").style.border = "none";
            document.getElementById("dapan1").style.backgroundColor = "cadetblue";
            document.getElementById("dapan2").style.border = "none";
            document.getElementById("dapan2").style.backgroundColor = "cadetblue";
            document.getElementById("dapan3").style.border = "none";
            document.getElementById("dapan3").style.backgroundColor = "cadetblue";
            document.getElementById("dapan4").style.border = "none";
            document.getElementById("dapan4").style.backgroundColor = "cadetblue";
            //doi mau btn va dap an
            if(cau == correctAnswers){
                //Change answers client choose
                document.getElementById("btn"+currentIndex).style.backgroundColor = "green";
                document.getElementById("dapan"+cau).style = "border: 5px solid green;"
                document.getElementById("dapan"+cau).style.backgroundColor = "greenyellow";
                trueAnswer = 1;
            }else{
                //Change answers client choose
                document.getElementById("btn"+currentIndex).style.backgroundColor = "red";
                document.getElementById("dapan"+cau).style = "border: 5px solid red;"
                document.getElementById("dapan"+cau).style.backgroundColor = "orange";
                trueAnswer = 0;
            }


            Choice[currentIndex] = cau; // danh dau cau
        }

        start();

    </script>
</body>
</html>