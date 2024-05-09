<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bực VL</title>
    <link rel="stylesheet" href="CSS/GDTN.css">
    <script src="https://kit.fontawesome.com/5263b3717e.js" crossorigin="anonymous"></script>
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

    $sql = "SELECT cau FROM `60_cau_diem_liet`";
    $res = mysqli_query($conn, $sql);
    $cdl = [];
    while($row = mysqli_fetch_array($res)){
        array_push($cdl,$row['cau']);
    }

    $sql = "SELECT cau FROM `chuong1`";
    $res = mysqli_query($conn, $sql);
    $chuong1 = [];
    while($row = mysqli_fetch_array($res)){
        array_push($chuong1,$row['cau']);
    }

    $sql = "SELECT cau FROM `chuong2`";
    $res = mysqli_query($conn, $sql);
    $chuong2 = [];
    while($row = mysqli_fetch_array($res)){
        array_push($chuong2,$row['cau']);
    }

    $sql = "SELECT cau FROM `chuong3`";
    $res = mysqli_query($conn, $sql);
    $chuong3 = [];
    while($row = mysqli_fetch_array($res)){
        array_push($chuong3,$row['cau']);
    }

    $sql = "SELECT cau FROM `chuong4`";
    $res = mysqli_query($conn, $sql);
    $chuong4 = [];
    while($row = mysqli_fetch_array($res)){
        array_push($chuong4,$row['cau']);
    }

    $sql = "SELECT cau FROM `chuong5`";
    $res = mysqli_query($conn, $sql);
    $chuong5 = [];
    while($row = mysqli_fetch_array($res)){
        array_push($chuong5,$row['cau']);
    }

    $sql = "SELECT cau FROM `chuong6`";
    $res = mysqli_query($conn, $sql);
    $chuong6 = [];
    while($row = mysqli_fetch_array($res)){
        array_push($chuong6,$row['cau']);
    }

    $sql = "SELECT cau FROM `chuong7`";
    $res = mysqli_query($conn, $sql);
    $chuong7 = [];
    while($row = mysqli_fetch_array($res)){
        array_push($chuong7,$row['cau']);
    }
?>
<?php include 'header.php'?>
<div class="container">
    <div class="item1">
        <div class='upper'>
            <div class="chuong" onclick="ChuyenChuong(1)">Chương 1</div>
            <div class="chuong" onclick="ChuyenChuong(2)">Chương 2</div>
            <div class="chuong" onclick="ChuyenChuong(3)">Chương 3</div>
            <div class="chuong" onclick="ChuyenChuong(4)">Chương 4</div>
            <div class="chuong" onclick="ChuyenChuong(5)">Chương 5</div>
            <div class="chuong" onclick="ChuyenChuong(6)">Chương 6</div>
            <div class="chuong" onclick="ChuyenChuong(7)">Chương 7</div>
            <div class="chuong" onclick="ChuyenChuong(8)">60 câu điểm liệt</div>
        </div>
        <div class='lower' id='lower'>
            <?php
                for($i = 1; $i <= 600; $i++){
                    echo "<div name='cau' class='bton' value=".$i." id="."bton".$i." onclick='ChuyenCau(".$i.")'>".$i."</div>";
                }
            ?>
        </div>
    </div>
    <div class="item2">
    <?php
    ?>
        <div>
            <span>
                <p id="cauHoi"> Phú đẹp trai không ?</p>
            </span>
        </div>

        <img src="img/2.png" alt="" id="img">
        <div class="dapan" id="dapan1" onclick="check(1)">Đáp án 1</div>
        <div class="dapan" id="dapan2" onclick="check(2)">Đáp án 2</div>
        <div class="dapan" id="dapan3" onclick="check(3)">Đáp án 3</div>
        <div class="dapan" id="dapan4" onclick="check(4)">Đáp án 4</div>
        <span id="message"></span>
    </div>
</div>

    <!-- Script -->
    <script>
        // Gán biến data = array từ php
        let data = <?php echo json_encode($data)?>;
        //Khai báo object question 
        let questions = [{
            question: data[0],
            img: data[1],
            answers:{
                dapan1:data[2],
                dapan2:data[3],
                dapan3:data[4],
                dapan4:data[5],
            },
            correct:data[6],
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
        let currentIndex = 1;
        let rightAnswer = 0;
        let cdl = 0;
        let CauDL = [];
        let Choice = [];
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
                document.getElementById("img").setAttribute("src", "Anh/Câu "+currentQuestion.img+".png");
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

            for(i = 167; i <= 600; i++){
                document.getElementById("bton"+i).style.display = "none";
            }
        }

        function ChuyenChuong(soChuong){
            let chuong;
            cdl = 0;
            if(soChuong == 1){
                chuong = <?php echo json_encode($chuong1)?>;
            }else if(soChuong == 2){
                chuong = <?php echo json_encode($chuong2)?>;
            }else if(soChuong == 3){
                chuong = <?php echo json_encode($chuong3)?>;
            }else if(soChuong == 4){
                chuong = <?php echo json_encode($chuong4)?>;
            }else if(soChuong == 5){
                chuong = <?php echo json_encode($chuong5)?>;
            }else if(soChuong == 6){
                chuong = <?php echo json_encode($chuong6)?>;
            }else if(soChuong == 7){
                chuong = <?php echo json_encode($chuong7)?>;
            }else if(soChuong == 8){
                chuong = <?php echo json_encode($cdl)?>;
                cdl = 1;
            }
            //remove all btn
            for(let i = 1; i <= 600; i++){
                if(document.getElementById("bton"+i) != null)
                    document.getElementById("bton"+i).remove();
            }
            //add btn co trong chuong
            for (var i = 0; i < chuong.length; i++) {
                let html = "<div name='cau' class='bton' value=" +chuong[i]+" id='bton"+chuong[i]+"' onclick='ChuyenCau("+chuong[i]+")'>"+chuong[i]+"</div>";
                document.getElementById("lower").insertAdjacentHTML("beforeend", html);
            }
            //chuyen cau dau tien tai chuong
            ChuyenCau(chuong[0]);
        }

        function markChoice(){
            for(let i = 0; i < 600; i++){
                if(CauDL[i] != null && document.getElementById("bton"+i) != null)
                    document.getElementById("bton"+i).style.backgroundColor = "aqua";
            }

            for(let i = 0; i < 600; i++){
                if(Choice[i] != null && document.getElementById("bton"+i) != null){
                    if(Choice[i] == 1){
                        document.getElementById("bton"+i).style.backgroundColor = "green";
                    }else{
                        document.getElementById("bton"+i).style.backgroundColor = "red";
                    }
                }
            }
        }

        function markCauDL(){
            for(let i = 0; i < 600; i++){
                if(Choice[i] != null && document.getElementById("bton"+i) != null)
                    document.getElementById("bton"+i).style.backgroundColor = "aqua";
            }
            for(let i = 0; i < 600; i++){
                if(CauDL[i] != null && document.getElementById("bton"+i) != null){
                    if(CauDL[i] == 1){
                        document.getElementById("bton"+i).style.backgroundColor = "green";
                    }else{
                        document.getElementById("bton"+i).style.backgroundColor = "red";
                    }
                }
            }
        }

        function ChuyenCau(cau){
            currentIndex = cau;
            let currentQuestion = questions[currentIndex-1];
            let answers = currentQuestion.answers;
            // reset all answer
            document.getElementById("dapan1").style.border = "none";
            document.getElementById("dapan1").style.backgroundColor = "aqua";
            document.getElementById("dapan2").style.border = "none";
            document.getElementById("dapan2").style.backgroundColor = "aqua";
            document.getElementById("dapan3").style.border = "none";
            document.getElementById("dapan3").style.backgroundColor = "aqua";
            document.getElementById("dapan4").style.border = "none";
            document.getElementById("dapan4").style.backgroundColor = "aqua";
            // Hien thi cau hoi
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
            if(cdl == 1)
                markCauDL();
            else
                markChoice();
        }

        function check(cau){
            let currentQuestion = questions[currentIndex-1];
            let correctAnswers = currentQuestion.correct;
            let trueAnswer;
            // reset all answer
            document.getElementById("dapan1").style.border = "none";
            document.getElementById("dapan1").style.backgroundColor = "aqua";
            document.getElementById("dapan2").style.border = "none";
            document.getElementById("dapan2").style.backgroundColor = "aqua";
            document.getElementById("dapan3").style.border = "none";
            document.getElementById("dapan3").style.backgroundColor = "aqua";
            document.getElementById("dapan4").style.border = "none";
            document.getElementById("dapan4").style.backgroundColor = "aqua";
            if(cau == correctAnswers){
                //Change answers client choose
                document.getElementById("bton"+currentIndex).style.backgroundColor = "green";
                document.getElementById("dapan"+cau).style = "border: 5px solid green;"
                document.getElementById("dapan"+cau).style.backgroundColor = "greenyellow";
                trueAnswer = 1;
                document.getElementById("message").innerHTML = "<i class='fa-solid fa-check'></i> Đúng";
            }else{
                //Change answers client choose
                document.getElementById("bton"+currentIndex).style.backgroundColor = "red";
                document.getElementById("dapan"+cau).style = "border: 5px solid red;"
                document.getElementById("dapan"+cau).style.backgroundColor = "orange";
                //Show right answer
                document.getElementById("dapan"+correctAnswers).style = "border: 5px solid green;"
                document.getElementById("dapan"+correctAnswers).style.backgroundColor = "greenyellow";

                trueAnswer = 0;
                document.getElementById("message").innerHTML = "<i class='fa-solid fa-xmark'></i> Sai";
                
            }

            if(cdl == 1)
                CauDL[currentIndex] = trueAnswer;
            else    
                Choice[currentIndex] = trueAnswer;
        }

        start();
    </script>
</body>
</html>