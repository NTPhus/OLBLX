<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luyện Thi</title>
    <link rel="stylesheet" href="CSS/GDLuyenThi.css">
</head>
<body>
    <?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "olblx");

    //lấy câu diểm liệt
    $cdl = [];
    $sql = "SELECT * FROM `600_cau_hoi` WHERE cau_diem_liet = '1'";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        array_push($cdl,$row['cau']);
    }

    //lấy đề
    if(isset($_GET['de'])){
        if($_GET['de'] == 'ngauNhien')
            $DeSo = rand(1,5);
        else{
            $DeSo = $_GET['de'];
        }    
    }

    $de = [];
    $cauDiemLiet = [];
    $sql = "SELECT * FROM `bodeonthiblx` where DeSo = $DeSo";
    $res = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_array($res)){
        for($i = 1; $i <= 30; $i++){
            array_push($de, $row["cau$i"]);
            if(array_search($row["cau$i"], $cdl)){
                array_push($cauDiemLiet, $i);
            }
        }
    }

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

    //tao ma luyen thi
    $malt = rand(1, 10000);
    $sql = "SELECT `MaLamBai` FROM `lich_su_lam_bai` WHERE MaLamBai = $malt";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        $malt = rand(1, 10000);
        $sql = "SELECT `MaLamBai` FROM `lich_su_lam_bai` WHERE MaLamBai = $malt";
        $res = mysqli_query($conn, $sql);
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
                <div  class="submit_btn">Nộp bài</div>
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
                    <span id="icon">  </span>

                    <p class = "loidanhgia" id="comment"></p>
                </div>
           </div>

            <div class="ketqua">
                <div class="cauhoii">
                    <h4>Số câu hỏi: </h4>
                    <p>35</p>
                </div>

                <div class="sodiem">
                    <h4>Tổng điểm: </h4>

                    <p id="rs">0/35</p>
                </div>

                <div class="danhgia">
                    <h4>Đánh giá: </h4>
                    <p id="DanhGia">Chưa đạt</p>
                </div>
            <button class ="exit_btn">Thoát</button>

            </div>
        </div>
    </div>
    </div>
    
    <?php include 'footer.php'?>
    <!-- Đồng hồ đếm ngược -->
    <script src="JS/index.js"></script>
    <script type="text/javascript">
        // Gán biến data = array từ php
        let data = <?php echo json_encode($data)?>;
        let cau_diem_liet = <?php echo json_encode($cauDiemLiet)?>;
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
        let status = true;
        let currentIndex = 1; // so cau hien tai
        let Answer = []; // so cau dung sai
        let Choice = []; // arr check da lam cau hoi do chua
        let img_cauHoi = document.getElementById("img-cauhoi");
        let dapan1 = document.getElementById("dapan1");
        let dapan2 = document.getElementById("dapan2");
        let dapan3 = document.getElementById("dapan3");
        let dapan4 = document.getElementById("dapan4");
        document.getElementById("btn"+currentIndex).style.backgroundColor = "lightgreen";
        function start(){
            let currentQuestion = questions[0];
            let answers = currentQuestion.answers;
            document.getElementById("cauHoi").innerHTML = "Câu " + currentIndex + ". " + currentQuestion.question;
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                img_cauHoi.style.display = "none";
            }
            else{
                img_cauHoi.style.display = "block";
                img_cauHoi.setAttribute("src", "Anh/Câu "+(currentIndex)+".png");
            }
            dapan1.innerHTML = answers.dapan1;
            dapan2.innerHTML = answers.dapan2;
            //kiem tra cau hoi nay co dapan3 khong
            if(answers.dapan3 === "")
                dapan3.style.display = "none";
            else{
                dapan3.innerHTML = answers.dapan3;
                dapan3.style.display = "block";
            }     
            //kiem tra cau hoi nay co dapan4 khong  
            if(answers.dapan4 === "")
                dapan4.style.display = "none";
            else{
                dapan4.innerHTML = answers.dapan4;
                dapan4.style.display = "block";
            }
        }

        function ChuyenCau(cau){
            document.getElementById("btn"+currentIndex).style.backgroundColor = "aqua";
            console.log("btn"+currentIndex);
            currentIndex = cau;
            let currentQuestion = questions[currentIndex-1];
            let answers = currentQuestion.answers;
            document.getElementById("btn"+currentIndex).style.backgroundColor = "lightgreen";
            document.getElementById("cauHoi").innerHTML = "Câu " +  currentIndex + ". " + currentQuestion.question;
            if(cau_diem_liet.indexOf(currentIndex) >= 0){
                document.getElementById("cauHoi").innerHTML += "<span id='cdl'>(*)</span>";
            }
            //reset cac lua chon truoc
            dapan1.style.backgroundColor = "#f4f4f4dd";
            dapan2.style.backgroundColor = "#f4f4f4dd";
            dapan3.style.backgroundColor = "#f4f4f4dd";
            document.getElementById("dapan4").style.backgroundColor = "#f4f4f4dd";
            //check co hinh thi hien thi
            if(currentQuestion.img == '0'){
                img_cauHoi.style.display = "none";
            }
            else{
                img_cauHoi.style.display = "block";
                img_cauHoi.setAttribute("src", "Anh/Câu "+currentQuestion.img+".png");
            }
            //Hien thi dap an len man hinh
            dapan1.innerHTML = answers.dapan1;
            dapan2.innerHTML = answers.dapan2;
            //kiem tra cau hoi nay co dapan3 khong
            if(answers.dapan3 === "")
                dapan3.style.display = "none";
            else{
                dapan3.innerHTML = answers.dapan3;
                dapan3.style.display = "block";
            }       
            //kiem tra cau hoi nay co dapan4 khong
            if(answers.dapan4 === "")
                dapan4.style.display = "none";
            else{
                dapan4.innerHTML = answers.dapan4;
                dapan4.style.display = "block";
            }
            //Neu cau nay da lam truoc do
            if(Choice[cau] != null) check(Choice[cau]);
        }
        //kiem tra cau dung sai va danh dau cau
        function check(cau){
            let currentQuestion = questions[currentIndex-1];
            let correctAnswers = currentQuestion.correct;
            //reset cac lua chon truoc do
            dapan1.style.backgroundColor = "#f4f4f4dd";
            dapan2.style.backgroundColor = "#f4f4f4dd";
            dapan3.style.backgroundColor = "#f4f4f4dd";
            dapan4.style.backgroundColor = "#f4f4f4dd";
            //doi mau btn va dap an
            document.getElementById("dapan"+cau).style.backgroundColor = "#98F5FF";
            document.getElementById("btn"+currentIndex).style.backgroundColor = "yellow";
            Choice[currentIndex] = cau; // danh dau cau
            //kiem tra ket qua dung sai
            Answer[currentIndex] = correctAnswers == cau ? 1 : -1;
            //Kiểm tra có sai câu điểm liệt
            if(correctAnswers != cau && cau_diem_liet.indexOf(cau) >= 0){
                status = false;
            }
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

        let diem = 0;

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
            
            for(let i = 1; i <= 35; i++){
                if(Answer[i] == 1) diem++;
            }
            ketqua.classList.add('result_open');
            document.getElementById("rs").innerHTML = diem + "/35";
            if(diem > 27 && status){
                document.getElementById("comment").innerHTML = "Bạn đã hoàn thành xuất sắc bài thi, chúc mừng bạn nhé!";
                document.getElementById("icon").innerHTML = "<i class='emoji ri-emotion-happy-fill'>";                
            }else{
                document.getElementById("comment").innerHTML = "rất tiếc, bạn chưa đạt, cố gắng luyện tập thêm nhé!";
                document.getElementById("icon").innerHTML = "<i class='emoji ri-emotion-unhappy-fill'></i>";
            }
        });
        exit2.addEventListener("click", () => {
            xacThuc.classList.add('xacthuc_close');
            ketqua.classList.remove("result_open");
         });

        thoat.addEventListener("click", () => {

            var timeNow = new Date();
            var day = timeNow.getDate();
            var month = timeNow.getMonth() + 1; // Tháng bắt đầu từ 0, nên cần cộng 1
            var year = timeNow.getFullYear();
            var formattedDate = day + "/" + month + "/" + year;

            let stringAns = "";
            for(let i = 1; i <= 30; i++){
                if(Choice[i] != null)
                    stringAns += i + ":" + Choice[i] + "-";
            }

            xacThuc.classList.add('xacthuc_close');
            ketqua.classList.remove('result_open');
            window.location.href = "XuLyPHP/XuLy.php?action=luuXemLai&MaLamBai=<?php echo $malt;?>&De=<?php echo $DeSo;?>&KetQua="+diem+"&NgayLamBai="+formattedDate+"&DapAn="+stringAns+"";
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