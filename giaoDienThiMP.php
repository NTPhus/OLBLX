<?php
    include("session.php");

    $conn = mysqli_connect("localhost", "root", "", "olblx");

    if(isset($_GET['de'])){
        if($_GET['de'] == 'ngauNhien')
            $DeSo = rand(1,5);
        else{
            $DeSo = $_GET['de'];
        }    
    }

    $de = [];
    $cauDiemLiet = [];
    $sql = "SELECT * FROM `bo_de_thi_mo_phong` where DeSo = $DeSo";
    $res = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_array($res)){
        $de = explode('-', $row['cau']);
    }

    $data = [];
    foreach($de as $cau){
        $sql = "SELECT * FROM video_mo_phong WHERE cau = $cau";
        $res = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_array($res)){
            array_push($data, $row["cau"]);
            array_push($data, $row["start"]);
            array_push($data, $row["end"]);
            array_push($data, $row["dodaivideo"]);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5263b3717e.js" crossorigin="anonymous"></script>
    <title>ôn thi mô phỏng</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .video{
            position: relative;
        }
        .container_video
        {
        }

        #myVideo{
            position: relative;
            display: block;
            height: 500px;
            width: 1000px;
            z-index: 1000;

        }
        #container{

            display: flex;
            margin-top: 100px;
            height: 650px;

        }
        .item1{
            margin-left: 100px;
            float: left;
            margin-top: -60px;
        }
        .item2{
            width: 300px;
            height: 560px;
            margin-left: 50px;
            background: #fff;
            margin-top: -60px;
            /* float: right; */
        }
        .item2 h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #0066CC;
            color: yellow;
            padding: 10px 0;
        }

        .item2 p{
            font-size: 15px;
            padding: 5px 10px;
        }
        .item2 p i{
            font-weight: 900;
        }

        .btnDatCo{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            margin-left: -5px;
            padding: 0 5px;
            height: 50px;
            width: 1000px;
            border-radius: 5px;
            font-size: 25px;
            background: #0066CC;
            color: yellow;
            font-weight: 800;
            letter-spacing: 1px;
            border: 1px solid #3399cc;
            cursor: pointer;
        }

        button{
            height: 30px;
            width: 30px;
            margin: 10px;
        }

        .button{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btnDatCo:hover{
            background: #3399CC;
        }

        table{

            margin: auto;
            border-collapse: collapse;
        }

        tr{
            text-align: center;
            padding: 15px;
        }

        td
        {
            border: 1px solid #222222; 
        }
        .td_heading{
            background: yellow;
        }
        #myProgress {
            width: 1000px;
            background-color: grey;
            height: 34px;
            margin-bottom: 20px;
        }

        #myBar {
            width: 1%;
            height: 34px;
            background-color: green;
        }

        .bar-block{
            max-width: 1000px;
            position: relative;
        }

        #time{
            margin-top: -25px;
            z-index: 10;
            text-align: center;
            font-size: 20px;
            color: yellow;

        }

        #bar{
            background-color: gray;
            height: 5px;
            width: 1000px;
            display: flex;
        }

        .bar{
            display: flex;
            position: absolute;
            background-color: pink;
            z-index: 10;
        }

        .p1, .p2, .p3, .p4, .p5{
            height: 5px;
            width: 20%;
            z-index: 20;
            opacity: 1;
        }

        .p1{
            background-color: lightgreen;
        }

        .p2{
            background-color: limegreen;
        }

        .p3{
            background-color: yellow;
        }

        .p4{
            background-color: orange;
        }

        .p5{
            background-color: red;
        }

        .result-bar{

        }

        #diem{
            color: red;
        }

        .flag{
            margin-top: -20px;
        }

        #checkrs{
            height: 30px;
            width: 50px;
        }

        .item2 {
            border: 1px solid #ccc;
        }
        .item2 h2{
            text-align: center;
        }

        .note{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 300px;
            color: red;
        }
        .luu_y{
            margin-top: 40px;
        }
        .luu_y h4{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: red;
        }

        .footer{
            display: block;
            width: 100PX;
            height: 500px;
            background: red;
        }

        #rs{
            display: block;
        }


    </style>

</head>
<body>
    <?php include 'header.php'?>
    <div class="container_video">
    <div id="container">
        <div class="item1">
            <div class="video">
                <video id = "myVideo" width="800" height="740" autoplay muted onclick="move()">
                    <source src="video/MoPhong/1.mp4" type="video/mp4" id="source">
                </video>
                <div id="myProgress">
                    <div id="myBar"></div>
                    <div id="time">Thời gian: 00:00/<span id="remain-time"></span></div>
                </div>

                <div class="bar-block">
                    <div id="bar"></div>
                </div>
                

            </div>
            <div class="button">
                <button class="btnDatCo" onclick="getPoint()">ĐẶT CỜ <i class="fa-regular fa-flag"></i> </button>
            </div>
            <div class="note">
                
                <h4>Bấm phím SPACE (phím cách) hoặc bấm nút GẮN CỜ khi phát hiện tình huống nguy hiểm </h4>
            </div>
            

        </div>
        
        <div class="item2">
            <h2>KẾT QUẢ</h2>
            <p><i class="ri-edit-box-line"></i> Đề thi: <?php echo $_GET['de'] ?></p>
            <div class="result-bar">
                <p><i class="ri-question-mark"></i>Tình huống: <span id="cauSo">1/10</span> <span id="rs"></span></p>
                <!-- Nhấn phím cách hoặc ấn nút đặt cờ khi phát hiện tình huống -->
            </div> 
            
        <?php
            echo "<table >";
            echo "<thead> <td class = 'td_heading'>Câu</td> <td = class = 'td_heading'>Điểm</td></thead>";
            for($i = 1; $i <= 10; $i++){
                echo "
                <tr>
                    <td>$i</td>
                    <td id='td$i'></td>
                </tr>
                ";
            }
            echo "</table>";
        ?>
        <div class="luu_y">
            <h4>Lưu ý:</h4>
            <p>Điểm của từng câu và Kết quả đánh giá bài thi sẽ được hiển thị ngay sau khi bạn hoàn thành bài thi!</p>
        </div>
        <button id="checkrs" type="button" onclick="hienThiKetQua()" hidden>Xem kết quả</button>

    </div>
    </div>
    <?php include 'footer.php' ?>


<script>

    let data = <?php echo json_encode($data) ?>;

    let videos = [{
        cau: parseInt(data[0]),
        start: parseInt(data[1]),
        end: parseInt(data[2]),
        length: parseInt(data[3]),
    }, ];

    for(let i=0; i<data.length;i+=4)
        videos.push({
            cau:parseInt(data[i]),
            start:parseInt(data[i+1]),
            end:parseInt(data[i+2]),
            length:parseInt(data[i+3]),
        });

    var x = document.getElementById("myVideo");

    var video = document.getElementsByTagName('video')[0];

    var currentIndex = 1;

    var trangThai = false;

    let status = false;

    let hienThiTG;

    var seconds = 0;

    var minutes = 0;

    let flag_bar = document.querySelector(".bar-block");

    let maxTime = 0;

    let arrDiem = [];

    let bar = document.getElementById("bar");

    video.onended = function(e) {
        if(currentIndex == 10)
            hienThiKetQua();
        if(currentIndex < 10){
            getPoint();
            chuyenVideo();
        }
    };
    //Nhan phim cach de dat co
    document.addEventListener('keydown', (event)=> {    
        if(event.key = ' ') getPoint();
    });
    //tinh diem
    function getPoint() {
        let p = (videos[currentIndex].end - videos[currentIndex].start)/5;
        let getP = videos[currentIndex].start;
        let diem;
        if(x.currentTime >= getP && x.currentTime <= getP+p){
            diem = 5;
        }else if(x.currentTime >= getP+p && x.currentTime <= getP+2*p){
            diem = 4;
        }else if(x.currentTime >= getP+2*p && x.currentTime <= getP+3*p){
            diem = 3;
        }else if(x.currentTime >= getP+3*p && x.currentTime <= getP+4*p){
            diem = 2;
        }else if(x.currentTime >= getP+4*p && x.currentTime <= getP+5*p){
            diem = 1;
        }else{
            diem = 0;
        }
        if(!status)
            arrDiem[currentIndex] = diem;
        CamCo();
    }
    //chuyen video
    function chuyenVideo(){

            currentIndex++;
            const newDiv = document.createElement("div");
            flag_bar.append(newDiv);
            newDiv.setAttribute("id", "flag"+currentIndex);
            newDiv.style.display = "none";
            status = false;
            
            let vid = document.getElementById("myVideo");
            vid.src = "video/MoPhong/"+ (videos[currentIndex].cau) +".mp4";
            vid.load(); 
            document.getElementById("cauSo").innerHTML = (currentIndex+"/10");
            document.getElementById("rs").innerHTML = "";
        }
        
    var width;
    var i = 0;
    var second = 0;
    function move() {
        let t = 0;
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            width = 1;
            var id = setInterval(frame, 10);
            function frame() {
                if(width == maxTime){
                    clearInterval(id);
                    i = 0;
                }else{
                    if(t != parseInt(x.currentTime)){
                        if(parseInt(x.currentTime) == 0){
                            t = parseInt(x.currentTime);
                        }else{
                            let s = parseInt(x.currentTime) - t;
                            seconds = seconds + s;
                            t = parseInt(x.currentTime);
                        }
                    }
                    if(seconds < 10) second = '0' + seconds;
                    else if(seconds >= 60){
                        seconds = 0;
                        second = '00';
                        minutes++;
                    }
                    else second = seconds;
                    document.getElementById("time").innerHTML = "Thời gian: 0"+minutes+":" + second + "/" + hienThiTG;
                    width = ((minutes*60+seconds)/maxTime) *100;
                    elem.style.width = width + "%";
                }
            }
        }
    }

    function CamCo(){
        if(!status){
            document.getElementById("flag"+currentIndex).style.display = "inline-block";
            document.getElementById("flag"+currentIndex).style.position = "absolute";
            document.getElementById("flag"+currentIndex).style.marginTop = "-20px";
            document.getElementById("flag"+currentIndex).style.marginLeft = width + "%";
            let currentTime = parseInt(x.currentTime);
            document.getElementById("flag"+currentIndex).innerHTML = "<i class='ri-flag-line'></i>" ;
            if(currentTime < 10) document.getElementById("rs").innerHTML = " Bạn đã cắm cờ lúc: 00:0" + currentTime;
            else document.getElementById("rs").innerHTML = "Bạn đã cắm cờ lúc: 00:" + currentTime;
            status = true;
        }else{
            document.getElementById("rs").innerHTML = " Bạn chỉ được cắm cờ 1 lần trên 1 tình huống";
        }
    }

    function start(){
        let vid = document.getElementById("myVideo");
        vid.src = "video/MoPhong/"+ (videos[currentIndex].cau) +".mp4";
        for(let i = 1; i < videos.length; i++){
            console.log(videos[i].cau);
            maxTime += videos[i].length;
        }
        console.log(maxTime);
        minutes = parseInt(maxTime/60);
        seconds = maxTime - (minutes * 60);
        if(seconds < 10){
            hienThiTG = "0"+minutes + ":"+"0"+seconds;
        }else{
            hienThiTG = "0"+minutes + ":"+seconds;
        }
        document.getElementById("remain-time").innerHTML = hienThiTG;
        const newDiv = document.createElement("div");
        flag_bar.append(newDiv);
        newDiv.setAttribute("id", "flag"+currentIndex);
        newDiv.style.display = "none";
        minutes = 0;
        seconds = 0;
    }

    function hienThiKetQua(){
        let time = 0;
        for(let i = 1; i <= 10; i++){
            
            if(arrDiem[i] == null) arrDiem[i] = 0;
            
            document.getElementById("td"+i).innerHTML = arrDiem[i];

            const newDiv =document.createElement("div");
            newDiv.style.width =(videos[i].end - videos[i].start)/maxTime * 100 + "%";
            newDiv.style.marginLeft = (time + videos[i].start)/maxTime * 100 + "%";
            newDiv.classList.add("bar");

            const newDiv1 = document.createElement("div");
            newDiv1.classList.add("p1");
            const newDiv2 = document.createElement("div");
            newDiv2.classList.add("p2");
            const newDiv3 = document.createElement("div");
            newDiv3.classList.add("p3");
            const newDiv4 = document.createElement("div");
            newDiv4.classList.add("p4");
            const newDiv5 = document.createElement("div");
            newDiv5.classList.add("p5");

            newDiv.appendChild(newDiv1);
            newDiv.appendChild(newDiv2);
            newDiv.appendChild(newDiv3);
            newDiv.appendChild(newDiv4);
            newDiv.appendChild(newDiv5);

            bar.appendChild(newDiv);

            time += videos[i].length;
        }
    }

    start();
    move();
</script>
</body>
</html>