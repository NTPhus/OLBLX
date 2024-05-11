<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luyện Thi</title>
    <link rel="stylesheet" href="CSS/styleGDLT.css">
</head>
<body>
    <?php
       function TaoRandomTheoChuong($arr, $scau){
        if($scau <= 0) return [];
        $kq = array_rand($arr, $scau);
        return $kq;
    }
    
    function LayChuong($chuong){
        $data = [];
        $conn = mysqli_connect("localhost", "root", "", "olblx");
        if($chuong == 1)
            $sql = "SELECT cau FROM `chuong1`";
        else if($chuong == 2)
            $sql = "SELECT cau FROM `chuong2`";
        else if($chuong == 3)
            $sql = "SELECT cau FROM `chuong3`";
        else if($chuong == 4)
            $sql = "SELECT cau FROM `chuong4`";
        else if($chuong == 5)
            $sql = "SELECT cau FROM `chuong5`";
        else if($chuong == 6)
            $sql = "SELECT cau FROM `chuong6`";
        else if($chuong == 7)
            $sql = "SELECT cau FROM `chuong7`";
        else if($chuong == 8)
            $sql = "SELECT cau FROM `60_cau_diem_liet`";
        $res = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($res)){
            $data[$row['cau']] = $row['cau'];
        }
        return $data;
    }
    
    function CombineChuong($arr, $chuong, $scau){
        $c1 = LayChuong($chuong);
        $array = TaoRandomTheoChuong($c1, $scau);
        if(is_array($array) || is_object($array))
        foreach($array as $a){
            array_push($arr, $a);
        }else{
            array_push($arr, $array);
        }
        return $arr;
    }
    
    function TaoDe($sc1, $sc2, $sc3, $sc4, $sc5, $sc6, $sc7, $sc8){
       $sum = $sc1 + $sc2 + $sc3 + $sc4 + $sc5 + $sc6 + $sc7 + $sc8;
       $data = [];
       $data = CombineChuong($data, 1, $sc1);
       $data = CombineChuong($data, 2, $sc2);
       $data = CombineChuong($data, 3, $sc3);
       $data = CombineChuong($data, 4, $sc4);
       $data = CombineChuong($data, 5, $sc5);
       $data = CombineChuong($data, 6, $sc6);
       $data = CombineChuong($data, 7, $sc7);
       $data = CombineChuong($data, 8, $sc8);
    
       array_unique($data);
       while(sizeof($data) != $sum){
            TaoDe($sc1, $sc2, $sc3, $sc4, $sc5, $sc6, $sc7, $sc8);
       }
       return $data;
    }
    
    $de = TaoDe(8, 0, 1, 1, 1, 9, 9, 1);
    $conn = mysqli_connect("localhost", "root", "", "olblx");
    // $de = [];
    // $sql = "SELECT * FROM `bodeonthiblx` where DeSo = 1";
    // $res = mysqli_query($conn, $sql);
    // if($row = mysqli_fetch_array($res)){
    //     for($i = 1; $i <= 30; $i++){
    //         array_push($de, $row["cau$i"]);
    //     }
    // }
     $data = [];
    
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
    
    ?>

    <?php include 'header.php'?>
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
                    for($i = 1; $i <= 30; $i++){
                        echo "<div class='btn' id='btn".$i."' onclick='ChuyenCau(".$i.")'>".$i."</div>";
                    }
                ?>
                
                <input type="text" id="result" name="result" value="0" hidden>
                <input type="text" id="answer" name="answer" value="0" hidden>
                <div  class="submit" onclick="CanhBao()">Submit</div>
                <input type="submit" id="submit" hidden>
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

        //Thiết lập ban đầu
        let currentIndex = 1; // so cau hien tai
        let Answer = []; // so cau dung sai
        let Choice = []; // arr check da lam cau hoi do chua
        function start(){
            let currentQuestion = questions[0];
            let answers = currentQuestion.answers;
            document.getElementById("cauHoi").innerHTML = currentIndex + ". " + currentQuestion.question;
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                document.getElementById("img").style.display = "none";
            }
            else{
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
            console.log(currentQuestion.img);
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
            document.getElementById("dapan1").style.backgroundColor = "cadetblue";
            document.getElementById("dapan2").style.backgroundColor = "cadetblue";
            document.getElementById("dapan3").style.backgroundColor = "cadetblue";
            document.getElementById("dapan4").style.backgroundColor = "cadetblue";
            //doi mau btn va dap an
            document.getElementById("dapan"+cau).style.backgroundColor = "orange";
            document.getElementById("btn"+currentIndex).style.backgroundColor = "yellow";
            Choice[currentIndex] = cau; // danh dau cau
            //kiem tra ket qua dung sai
            Answer[currentIndex] = correctAnswers == cau ? 1 : -1;
            let count = 0;
            for(let i = 1; i <= 25; i++){
                if(Answer[i] == 1) count++;
            }
            //dem ket qua va luu lai
            document.getElementById("result").setAttribute('value',count);
        }
        //Khong the quay ve trang truoc
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () {
            null
        };
        //canh bao nop bai
        function CanhBao(){
            let stringAns = "";
            for(let i = 1; i <= 30; i++){
                if(Choice[i] != null)
                    stringAns += i + ":" + Choice[i] + "-";
            }
            console.log(stringAns);
            if(confirm("Bạn có chắc chắn muốn nộp bài hay không ?")){
                document.getElementById("answer").setAttribute('value', stringAns);
                document.getElementById("submit").click();
            }  
        }

        start();

    </script>
</body>
</html>