<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luyện Thi</title>
    <link rel="stylesheet" href="CSS/vaothi.css">
    <style>
        
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.form-thi{
    margin-top: 100px;
    background: url('img/bg-video.jpg');
    text-align: center;
    height: 1050px;
}

.form-thi .form-heading{
    text-align: center;
    padding: 20px 0px;
    color: #fff;
}

.form-thi .container{
    width: 75%;
    height: 900px;
    display: block;
    margin: auto;
    display: flex;
    box-shadow: 0px 0px 5px 5px #999999;

}
/* CONTENT - Chứa câu hỏi + hình ảnh + đáp án */
/* Start*/
.content{
    width: 1000px;
    background-color: #fff;
    border: 1px solid black;
}
.cauhoi{
    text-align: left;
    font-size: 20px;
    font-weight: bold;
    margin: 20px 20px;
}

#img-cauhoi{
    height: 300px; 
    max-width: 800px;
    position: relative;
    margin: 10px 0px;
}
.dapan{
    min-height: 50px;
    width: auto;
    border-radius: 10px;
    border: 1px solid #ccc;
    background-color: #f4f4f4dd;
    font-size: 18px;
    margin: 20px 20px;
    padding-left: 20px;
    padding-top: 10px;
    text-align: left;
}

.dapan:hover{
    background-color: #33FFFF;
    cursor: pointer;
}

/* END */

/* BOTTOM BAR - Chứa đếm thời gian + 30 câu hỏi */
/* START */
.bottom-bar{
    width: 300px;
    height: auto;
    background: #fff;
    border: 1px solid black;
    
}

/* countdown */
.time{
    display: flex;
    justify-content: space-between;
    font-weight: bold;
    height: 50px;
    line-height: 50px;
    background-color:#09345b;
    font-size: 20px;
    color: yellow;
    padding: 0px 15px;
}

/* Nút hiện thị số câu */
 .btn{
    margin: 10px 5px;
    width: 40px;
    height: 40px;
    border-radius: 10px;
    font-weight: bold;
    font-size: 18px;
    background-color: aqua;
    display: inline-block;
    line-height: 40px;
    box-shadow: 0px 0px 5px #6633FF;
}
.btn:hover{
    background-color: #FFFF33;
}

/* Nút nộp bài */
.submit_btn{

    font-weight: bold;
    font-size: 20px;
    border-radius: 10px;
    height: 60px;
    width: 120px;
    line-height: 60px;
    background-color: #FFFF00;
    color: #EE0000;
    justify-items: center;
    margin-left: 30%;
    cursor: pointer;
    margin-top: 50px;
}
.submit:hover{
    opacity: 0.6;
    cursor: pointer;
}

/* END */



/* Form xác thực */
.xacthuc, .result {
			display: flex;
			align-items: center;
			justify-content: center;
            z-index: 1;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 26, 51, .95);
            /* transform: scale(0); */
            display: none;

		}

        .xacthuc_open, .result_open{
			display: flex;
        }
        .xacthuc_close{
            display: none;
        }

        .xacthuc_container{
            width: 400px;
            height: 200px;
            background: #fff;
            box-shadow: 0px 0px 10px #ccc;
        }
        .xacthuc_heading{
            background: #ddd;
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
        }
        .xacthuc_heading h3, .xacthuc_content p{
            font-family: Arial, Helvetica, sans-serif;
            color: #09345b
        }
        .xacthuc_content{
            font-weight: 550;
            padding: 20px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
        .xacthuc_buttons{
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 20px;
            padding: 20px;
        }
        .xacthuc_cancel, .xacthuc_confirm{
            padding: 10px 20px;
            width: 100px;
            cursor: pointer;
            font-weight: 800;
        }
        .xacthuc_cancel{
            background: yellow;
            border: 1px solid #FFCC00;
            color: red;
        }
        .xacthuc_confirm{
            color: #fff;
            background: #0066CC;
            border: 1px solid #006699;

        }
        .ri-close-large-line{
            font-size: 20px;
            font-weight: 600;
            cursor: pointer;
        }

/* -------------------FORM KET QUA---------------------- */
        .result_container{
            box-shadow: 0px 0px 20px #DDDDDD;
            color: #333333;
        }
        .result-heading
        {
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            color: #fff;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #0099FF;
            padding: 10px 20px;
        }

        .result-heading h4{
            letter-spacing: 0.5px;
        }


        .result_content_item{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        } 

        .emoji
        {
            color: #FFCC00;
            font-size: 30px;

        }
        .cauhoii, .sodiem, .danhgia{
            display: flex;
            padding: 10px 0px;
        }

        .result_content{
            background: #fff;
            padding: 20px 20px;
        }
        .result_content h1{
            font-family: Arial, Helvetica, sans-serif;

            text-align: center;
        }
        .result_content .loidanhgia{
            font-family: Arial, Helvetica, sans-serif;
            color: red;
            text-transform: uppercase;
            font-size: 20px;
            font-weight: 900;
            font-weight: bolder;
            
        }

        .result_container_heading{
            padding: 20px 0px;
            text-align: center;
            line-height: 30px;
        }
        .exit_btn
        {
            text-transform: uppercase;
            margin-top: 30px;
            font-size: 20px;
            font-weight: 600;
            background: #0099FF;
            color: #fff;
            text-align: center;
            padding: 20px 40px;
            margin-left: 40%;
            border-radius: 10px;
            cursor: pointer;
            border: 1px solid #FFCC00;

        }
        .exit_btn:hover {
            opacity: 0.5;
        }
        .ketqua{
            font-size: 20px;
            line-height: 25px;
        }
         .ketqua p{
            margin-left: 40px;
         }
    </style>
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
        if($chuong == 8)
            $sql = "SELECT cau FROM `600_cau_hoi` WHERE cau_diem_liet = '1'";
        else
            $sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '$chuong'";
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
    <div class="form-thi">
        <h1 class ="form-heading">PHẦN MỀM THI THỬ LÝ THUYẾT LÁI XE MỚI NHẤT 2024</h1>
    <form  action="GiaoDienKetQua.php" method="POST">
        <div class="container">
            <div class="content">
                <div class="cauhoi">
                    <p id="cauHoi">Bạn đã sẵn sàng chưa?</p>
                </div>
                <div class="hinhanh">
                    <img src="" alt="" id="img-cauhoi">
                </div>
                <div class="cacdapan">
                    <div class="dapan" id="dapan1" onclick="check(1)">Đáp án 1</div>
                    <div class="dapan" id="dapan2" onclick="check(2)">Đáp án 2</div>
                    <div class="dapan" id="dapan3" onclick="check(3)">Đáp án 3</div>
                    <div class="dapan" id="dapan4" onclick="check(4)">Đáp án 4</div>
                </div>
            </div>
            <div class="bottom-bar">
                <div class="time"><p>Thời gian còn lại</p><p id="countdown"> 30:00</p></div>
               <?php 
                    for($i = 1; $i <= 30; $i++){
                        echo "<div class='btn' id='btn".$i."' onclick='ChuyenCau(".$i.")'>".$i."</div>";
                    }
                ?> 
                
                <input type="text" id="result" name="result" value="0" hidden>
                <input type="text" id="answer" name="answer" value="0" hidden>
                <div  class="submit_btn" onclick="CanhBao()">Nộp bài</div>
                <input type="submit" id="submit" hidden>
            </div>
        </div>
    </form>

    <!-- Form xác thực -->
    <div class="xacthuc">
    <div class="xacthuc_container">
        <div class="xacthuc_heading">
            <h3>KẾT THÚC BÀI THI </h3>
            <span><i class="ri-close-large-line"></i></span>
        </div>

        <div class="xacthuc_content">
            <!-- <form action="GiaoDienKetQua.html"> -->
                <p>Bạn chắc chắn muốn kết thúc và nộp bài thi?</p>
                <div class="xacthuc_buttons">
                    <button class="xacthuc_cancel">HỦY</button>
                    <button class="xacthuc_confirm">OK</button>
                </div>
            <!-- </form> -->
        </div>
        </div>
    </div>

    </div>
    <div class="result">
        <div class="result_container">
        <div class="result-heading">
            <h4>THI THỬ LÝ THUYẾT SÁT HẠCH LÁI XE</h4>
            <span><i class="js_btn_exit  ri-close-large-line"></i></span>
        </div>
        <div class="result_content">
                <h1>KẾT QUẢ THI</h1>
            <div class="result_content_item">

                <div class="result_container_heading">
                    <!-- <span><i class="emoji ri-emotion-happy-fill"></i></span> -->
                    <span> <i class="emoji ri-emotion-unhappy-fill"></i> </span>

                    <p class = "loidanhgia">rất tiếc, bạn chưa đạt, cố gắng luyện tập thêm nhé!</p>
                </div>
           </div>

            <div class="ketqua">
                <div class="cauhoii">
                    <h4>Số câu hỏi: </h4>
                    <p>35</p>
                </div>

                <div class="sodiem">
                    <h4>Tổng điểm: </h4>

                    <p>0/35</p>
                </div>

                <div class="danhgia">
                    <h4>Đánh giá: </h4>
                    <p>Chưa đạt</p>
                </div>
            <button class ="exit_btn">Thoát</button>

            </div>
        </div>
    </div>
    </div>
    

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
            document.getElementById("cauHoi").innerHTML = "Câu " + currentIndex + ". " + currentQuestion.question;
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                document.getElementById("img-cauhoi").style.display = "none";
            }
            else{
                document.getElementById("img-cauhoi").style.display = "block";
                document.getElementById("img-cauhoi").setAttribute("src", "Anh/Câu "+(currentIndex)+".png");
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
            document.getElementById("cauHoi").innerHTML = "Câu " +  currentIndex + ". " + currentQuestion.question;
            //reset cac lua chon truoc
            document.getElementById("dapan1").style.backgroundColor = "#f4f4f4dd";
            document.getElementById("dapan2").style.backgroundColor = "#f4f4f4dd";
            document.getElementById("dapan3").style.backgroundColor = "#f4f4f4dd";
            document.getElementById("dapan4").style.backgroundColor = "#f4f4f4dd";
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                document.getElementById("img-cauhoi").style.display = "none";
            }
            else{
                document.getElementById("img-cauhoi").style.display = "block";
                document.getElementById("img-cauhoi").setAttribute("src", "Anh/Câu "+currentQuestion.img+".png");
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
            document.getElementById("dapan1").style.backgroundColor = "#f4f4f4dd";
            document.getElementById("dapan2").style.backgroundColor = "#f4f4f4dd";
            document.getElementById("dapan3").style.backgroundColor = "#f4f4f4dd";
            document.getElementById("dapan4").style.backgroundColor = "#f4f4f4dd";
            //doi mau btn va dap an
            document.getElementById("dapan"+cau).style.backgroundColor = "#98F5FF";
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

        start();

    </script>
    <?php include 'footer.php'?>
    <script>
        const nopBai = document.querySelector(".submit_btn");
        const xacThuc = document.querySelector(".xacthuc")
        const cancel =  document.querySelector(".xacthuc_cancel");
        const exit = document.querySelector(".ri-close-large-line");
        const wrapper1 = document.querySelector(".xacthuc_container");

        nopBai.addEventListener("click", () => {
            xacThuc.classList.add("xacthuc_open");
        });
        
        cancel.addEventListener("click", () => {
            xacThuc.classList.remove("xacthuc_open");
        });

        exit.addEventListener("click", () => {
            xacThuc.classList.remove("xacthuc_open");
        });

        // ấn ra ngoài thì vẫn đóng form
        xacThuc.addEventListener('click', () => {
            xacThuc.classList.remove('xacthuc_open');
        });

        // giải quyết vấn đề ấn trong form  thì mất form (ngăn chặn việc nổi bọt của form)
        wrapper1.addEventListener('click', function(event )
        {
            event.stopPropagation();
        })

        // ------------------------
        const OK = document.querySelector(".xacthuc_confirm");
        const ketqua = document.querySelector(".result");
        const thoat = document.querySelector(".exit_btn");
        const exit2 = document.querySelector(".js_btn_exit");
        const wrapper2 = document.querySelector(".result_container");
        

        OK.addEventListener("click", () => {
            // ketqua.classList.remove('xacthuc_open');
            ketqua.classList.add('result_open');

        });
            exit2.addEventListener("click", () => {
            xacThuc.classList.add('xacthuc_close');
            ketqua.classList.remove("result_open");
         });

        thoat.addEventListener("click", () => {
            xacThuc.classList.add('xacthuc_close');
            ketqua.classList.remove('result_open');
        });

        // ấn ra ngoài thì vẫn đóng form
        ketqua.addEventListener('click', () => {
            xacThuc.classList.add('xacthuc_close');
            ketqua.classList.remove('result_open');
        });

        // giải quyết vấn đề ấn trong form thì mất form (ngăn chặn việc nổi bọt của form)
        wrapper2.addEventListener('click', function(event )
        {
            xacThuc.classList.add('xacthuc_close');
            event.stopPropagation();
        })



    </script>
    
</body>
</html>