<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bực VL</title>
    <link rel="stylesheet" href="CSS/styleGDTN.css">
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

<div class="container">
    <div class="item1">
        <?php
            for($i = 1; $i <= 150; $i++){
                echo "<div name='cau' class="."btn"." value=".$i." id="."btn".$i." onclick='ChuyenCau(".$i.")'>".$i."</div>";
            }
        ?>
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

        
        <div class="btn" onclick="ChuyenCau('prev')">Previous</div>
        <div class="btn" onclick="ChuyenCau('next')">Next</div>
    
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
            
            if(cau == 'next') currentIndex = currentIndex < 600 ? currentIndex + 1 : 0;
            else if(cau == 'prev') currentIndex = currentIndex > 1 ? currentIndex - 1 : 600;
            else currentIndex = cau;
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

        function check(cau){
            let currentQuestion = questions[currentIndex-1];
            let correctAnswers = currentQuestion.correct;
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
                document.getElementById("btn"+currentIndex).style.backgroundColor = "green";
                document.getElementById("dapan"+cau).style = "border: 5px solid green;"
                document.getElementById("dapan"+cau).style.backgroundColor = "greenyellow";
            }else{
                //Change answers client choose
                document.getElementById("btn"+currentIndex).style.backgroundColor = "red";
                document.getElementById("dapan"+cau).style = "border: 5px solid red;"
                document.getElementById("dapan"+cau).style.backgroundColor = "orange";
            }
        }

        start();
    </script>
</body>
</html>