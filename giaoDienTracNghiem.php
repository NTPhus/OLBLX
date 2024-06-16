<?php 
    include("session.php");
?>

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

$sql = "SELECT cau FROM `600_cau_hoi` WHERE cau_diem_liet = '1'";
$res = mysqli_query($conn, $sql);
$cdl = [];
while($row = mysqli_fetch_array($res)){
    array_push($cdl,$row['cau']);
}

$sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '1'";
$res = mysqli_query($conn, $sql);
$chuong1 = [];
while($row = mysqli_fetch_array($res)){
    array_push($chuong1,$row['cau']);
}

$sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '2'";
$res = mysqli_query($conn, $sql);
$chuong2 = [];
while($row = mysqli_fetch_array($res)){
    array_push($chuong2,$row['cau']);
}

$sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '3'";
$res = mysqli_query($conn, $sql);
$chuong3 = [];
while($row = mysqli_fetch_array($res)){
    array_push($chuong3,$row['cau']);
}

$sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '4'";
$res = mysqli_query($conn, $sql);
$chuong4 = [];
while($row = mysqli_fetch_array($res)){
    array_push($chuong4,$row['cau']);
}

$sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '5'";
$res = mysqli_query($conn, $sql);
$chuong5 = [];
while($row = mysqli_fetch_array($res)){
    array_push($chuong5,$row['cau']);
}

$sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '6'";
$res = mysqli_query($conn, $sql);
$chuong6 = [];
while($row = mysqli_fetch_array($res)){
    array_push($chuong6,$row['cau']);
}

$sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '7'";
$res = mysqli_query($conn, $sql);
$chuong7 = [];
while($row = mysqli_fetch_array($res)){
    array_push($chuong7,$row['cau']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm ô tô</title>
    <link rel="stylesheet" href="img/back.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="CSS/grid.css">
    <link rel="stylesheet" href="font/remixicon.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .red{
            color: #FF4040 !important;
        }

        .green{
            color: #54FF9F !important;
        }

        .container{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .item1{
            height: 500px;
            border: 1px solid;
            overflow: scroll;
            background-color: white;
        }

        .item2{
            height: 500px;
            padding-left: 20px;
            border: 1px solid;
            overflow: scroll;
            background-color: white;

        }

        #cauHoi, .dapan{
            width: 450px;
        }

        #cauHoi{
            padding: 10px;
            margin: 20px 0;
            border-radius: 15px;
            font-size: 20px;
            font-weight: bold;
            width: 100%;
        }

        .dapan{
            margin: 20px 0;
            padding: 15px;
            border-radius: 15px;
            width: 100%;
            background: #EEEEEE;

        }

        .dapan:hover{
            background-color: #99FFFF;
            cursor: pointer;
        }

        .btn{
            border-radius: 10px;
            width: 40px;
            height: 40px;
            border: 1px solid;
            cursor: pointer;
            margin: 10px 8px;
            display: inline-table;
            text-align: center;
            font-size: 20px;
            line-height: 40px;
            background: #EEEEEE;
            border: 2px solid #DDDDDD;
        }

        .btn:hover{
            background-color: #99FFFF;
            border: 2px solid #33CCFF;
        }



        /* end */
        .app{
            /* background-color: #162938 ; */
            z-index: 99;
            background: url('./img/bg-video.jpg');
        }

        a{
            text-decoration: none;
        }
        .text{
            margin-left: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .text_page{
            width: 100%;
            height: 50px;
            color: #fff;
            padding: 20px 0;
            margin-bottom: 40px;
        }

        .text_page h2{
            text-transform: uppercase;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .content_app{
            padding-top: 50px;
            padding-bottom: 100px;
        }

        .app_share{
            padding:20px 0;
            background-color: antiquewhite;
        }

        .app_share_text{
            display: block;
            font-size: 30px;
        }
        .app_share_item1{
            display: flex;
            font-size: 30px;
            justify-content: center;
            align-items: center;
        }

        .upper{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .chuong{
            cursor: pointer;
            border-radius: 15px;
            text-align: center;
            justify-content: center;
            background-color: #EEEEEE;
            margin-top: 40px;
            margin-right: 10px;
            font-weight: bold;
            color: #111111;
            width: 130px;
            height: 40px;
            padding-top: 10px;
            border: 1px solid #DDDD;
        }

        .chuong:hover{
            background-color: #FFFF00;
            border: 2px solid #FFCC00;
        }

        .item1, .item2{
            margin-top: 60px;
            height: 600px;
        }

        .item2{
            padding: 0 50px;
        }

        .app_heading{
            
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            font-weight: 700;
            font-size: 16px;
            font-style: italic;

        }
        .app_heading p{
           
        }
        .app_heading h4{
            margin: 0px 8px;
        }

        .lower{
            margin: 20px 0;
        }

        #img{
            max-width: 700px;
            max-height: 300px;
        }
    </style>
    <script src="https://kit.fontawesome.com/5263b3717e.js" crossorigin="anonymous"></script>
</head>
<body>
 <?php include 'header.php' ?>
    <div class="app">
        <section class="text_page">
            <div class="grid wide">
                    <div class="row"> 
                        <a href="#"><i class="ri-arrow-left-line"></i></a>
                        <h2 class="text">Ôn luyện trắc nghiệm</h2>
                    </div>
            </div>
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
            <div class="app_heading">
                <p>Lưu ý: Phương án 
                    <h4 class ="green"> ĐÚNG </h4>
                    khi chọn sẽ có màu
                    <h4 class ="green">XANH</h4>
                    , còn phương án 
                    <h4 class ="red"> SAI </h4>
                    sẽ có màu
                    <h4 class ="red">ĐỎ</h4>

                </p>
            </div>
            <div class="app_heading">
            <p>
                    Ô  
                    <span><i class=" green ri-square-fill"></i></span>
                    là câu bạn trả lời đúng. Ô 
                    <span><i class=" red ri-square-fill"></i></span>
                    là câu bạn trả lời sai.
                </p>
            </div>
        </section>
        <section class="content_app">
            <div class="grid wide">
                <div class="row answer"> 
                    
                        <div class="col l-5 item1">
                            <div class='lower' id='lower'>
                                
                                <?php
                                    // for($i = 1; $i <= 600; $i++){
                                    //     echo "<div name='cau' class="."btn"." value=".$i." id="."btn".$i." onclick='ChuyenCau(".$i.")'>".$i."</div>";
                                    // }
                                ?>
                            </div>
                        </div>
                    <div class="col l-7 item2">
                            <div>
                                <span>
                                <p id="cauHoi"> Phú đẹp trai không ?</p>
                                    <div class="image">
                                    <img id ="img" src="img/logo (2).png" alt="Ảnh">
                                    </div>
                                </span>
                            </div>
                            <div class="dapan" id="dapan1" onclick="check(1)">Đáp án 1</div>
                            <div class="dapan" id="dapan2" onclick="check(2)">Đáp án 2</div>
                            <div class="dapan" id="dapan3" onclick="check(3)">Đáp án 3</div>
                            <div class="dapan" id="dapan4" onclick="check(4)">Đáp án 4</div>
                            <span id="message"></span>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <?php include 'footer.php' ?>
</div>      
</body>
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
        let preChoice = [];
        let preCauDL = [];
        let img = document.getElementById("img");
        let dapan1 = document.getElementById("dapan1");
        let dapan2 = document.getElementById("dapan2");
        let dapan3 = document.getElementById("dapan3");
        let dapan4 = document.getElementById("dapan4");
        function start(){ 
            ChuyenChuong(1);
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
                if(document.getElementById("btn"+i) != null)
                    document.getElementById("btn"+i).remove();
            }
            //add btn co trong chuong
            for (var i = 0; i < chuong.length; i++) {
                let html = "<div name='cau' class='btn' value=" +chuong[i]+" id='btn"+chuong[i]+"' onclick='ChuyenCau("+chuong[i]+")'>"+chuong[i]+"</div>";
                document.getElementById("lower").insertAdjacentHTML("beforeend", html);
            }
            //chuyen cau dau tien tai chuong
            ChuyenCau(chuong[0]);
        }

        function markChoice(){
            for(let i = 0; i < 600; i++){
                if(CauDL[i] != null && document.getElementById("btn"+i) != null)
                    document.getElementById("btn"+i).style.backgroundColor = "white";
            }

            for(let i = 0; i < 600; i++){
                if(Choice[i] != null && document.getElementById("btn"+i) != null){
                    if(Choice[i] == 1){
                        document.getElementById("btn"+i).style.backgroundColor = "#00CD66";
                    }else{
                        document.getElementById("btn"+i).style.backgroundColor = "#FF4040 ";
                    }
                }
            }
        }

        function markCauDL(){
            for(let i = 0; i < 600; i++){
                if(Choice[i] != null && document.getElementById("btn"+i) != null)
                    document.getElementById("btn"+i).style.backgroundColor = "white";
            }
            for(let i = 0; i < 600; i++){
                if(CauDL[i] != null && document.getElementById("btn"+i) != null){
                    if(CauDL[i] == 1){
                        document.getElementById("btn"+i).style.backgroundColor = "#00CD66";
                    }else{
                        document.getElementById("btn"+i).style.backgroundColor = "#FF4040";
                    }
                }
            }
        }

        function ChuyenCau(cau){
            if(Choice[currentIndex] == undefined && document.getElementById("btn"+currentIndex) != null) document.getElementById("btn"+currentIndex).style.backgroundColor = "#EEEEEE";
            currentIndex = cau;
            document.getElementById("btn"+cau).style.backgroundColor = "#99FFFF";
            let currentQuestion = questions[currentIndex-1];
            let answers = currentQuestion.answers;
            // reset all answer
           dapan1.style.border = "none";
           dapan1.style.backgroundColor = "#EEEEEE";
           dapan2.style.border = "none";
           dapan2.style.backgroundColor = "#EEEEEE";
           dapan3.style.border = "none";
           dapan3.style.backgroundColor = "#EEEEEE";
           dapan4.style.border = "none";
           dapan4.style.backgroundColor = "#EEEEEE";
            // Hien thi cau hoi
            document.getElementById("cauHoi").innerHTML = currentIndex + ". " + currentQuestion.question;
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                img.style.display = "none";
            }
            else{
                img.style.display = "block";
                img.setAttribute("src", "Anh/Câu "+(currentIndex)+".png");
            }
            dapan1.innerHTML = answers.dapan1;
            dapan2.innerHTML = answers.dapan2;
            if(answers.dapan3 === "")
                dapan3.style.display = "none";
            else{
                dapan3.innerHTML = answers.dapan3;
                dapan3.style.display = "block";
            }       
            if(answers.dapan4 === "")
                dapan4.style.display = "none";
            else{
                dapan4.innerHTML = answers.dapan4;
                dapan4.style.display = "block";
            }
            document.getElementById("message").innerHTML = "";
            if(cdl == 1){
                markCauDL();
                if(preCauDL[cau] != null) check(preCauDL[cau]);
            }
            else{
                markChoice();
                if(preChoice[cau] != null) check(preChoice[cau]);
            }   
        }

        function check(cau){
            let currentQuestion = questions[currentIndex-1];
            let correctAnswers = currentQuestion.correct;
            let trueAnswer;
            // reset all answer
            dapan1.style.border = "none";
            dapan1.style.backgroundColor = "#EEEEEE";
            dapan2.style.border = "none";
            dapan2.style.backgroundColor = "#EEEEEE";
            dapan3.style.border = "none";
            dapan3.style.backgroundColor = "#EEEEEE";
            dapan4.style.border = "none";
            dapan4.style.backgroundColor = "#EEEEEE";
            if(cau == correctAnswers){
                //Change answers client choose - câu đúng
                document.getElementById("btn"+currentIndex).style = "border: 2px solid #008B45;";
                document.getElementById("btn"+currentIndex).style.backgroundColor = "#54FF9F";

                //chọn đáp án đúng
                document.getElementById("dapan"+cau).style = "border: 2px solid #008B45;"
                document.getElementById("dapan"+cau).style.backgroundColor = "#54FF9F";
                trueAnswer = 1;
                document.getElementById("message").innerHTML = "<i class=' green fa-solid fa-check'></i> Đáp án đúng"
            }else{
                //Change answers client choose - câu sai
                document.getElementById("btn"+currentIndex).style = "border: 2px solid #FF0000;";
                document.getElementById("btn"+currentIndex).style.backgroundColor = "#FA8072";

                // đáp án sai
                document.getElementById("dapan"+cau).style = "border: 2px solid #FF0000;"
                document.getElementById("dapan"+cau).style.backgroundColor = "#FA8072";
                //show right answer
                
                document.getElementById("dapan"+correctAnswers).style = "border: 2px solid #008B45;";
                document.getElementById("dapan"+correctAnswers).style.backgroundColor = "#54FF9F";
                trueAnswer = 0;

                document.getElementById("message").innerHTML = "<i class=' red fa-solid fa-xmark'></i> Đáp án sai"
                
            }
            
            if(cdl == 1){
                CauDL[currentIndex] = trueAnswer;
                preCauDL[currentIndex] = cau;
            }
            else{
                Choice[currentIndex] = trueAnswer;
                preChoice[currentIndex] = cau;
            }

            
        }

        start();
    </script>

</html>