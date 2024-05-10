<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5263b3717e.js" crossorigin="anonymous"></script>
    <title>Ôn thi mô phỏng</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .video{
            position: relative;
        }

        #myVideo{
            margin-top: 50px;
            display: block;
            height: 500px;
            width: 1000px;
            z-index: -1;
        }
        .container{
            display: flex;
        }
        .item1{
            width: 70%;
            float: left;
        }
        .item2{
            width: 30%;
            float: right;
        }

        button{
            margin-top: 20px;
            height: 50px;
            width: 100px;
            border-radius: 10px;
            font-size: 20px;
        }

        .button{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button:hover{
            background-color: burlywood;
        }

        table{
            margin-top: 50px;
            width: 300px;
            height: 500px;
        }

        tr{
            text-align: center;
        }

        #myProgress {
            width: 1000px;
            background-color: grey;
            margin-bottom: 20px;
        }

        #myBar {
            width: 1%;
            height: 30px;
            background-color: green;
        }

        .bar-block{
            max-width: 1000px;
        }

        #time{
            margin-top: -20px;
            z-index: 10;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        #bar{
            background-color: gray;
            height: 5px;
            width: 1000px;
            display: flex;
        }

        #p1, #p2, #p3, #p4, #p5{
            height: 8px;
            width: 20px;
            z-index: 10;
            opacity: 0;
        }

        #p1{
            background-color: lightgreen;
        }

        #p2{
            background-color: limegreen;
        }

        #p3{
            background-color: yellow;
        }

        #p4{
            background-color: orange;
        }

        #p5{
            background-color: red;
        }
    </style>
</head>
<body>
    <div class="containter" id="container">
        <div class="item1">
            <div class="video">
                <video id = "myVideo" width="800" height="740" controls muted onclick="move()">
                    <source src="video/1.mp4" type="video/mp4" id="source">
                </video>
                <div id="myProgress">
                    <div id="myBar"></div>
                    <div id="time">Thời gian: 00:00/00:27</div>
                </div>

                <div class="bar-block">
                    <span id="flag"></i></span>
                    <div id="bar">
                        <div id="p1"></div>
                        <div id="p2"></div>
                        <div id="p3"></div>
                        <div id="p4"></div>
                        <div id="p5"></div>
                    </div>
                </div>
                

            </div>
            <div class="button">
                <button onclick="getPoint()">Đặt cờ <i class="fa-regular fa-flag"></i> </button>
            </div>
        </div>
        <div class="item2">
            <table border="1">
                <thead>
                    <td>Câu hỏi</td>
                    <td>Điểm</td>
                </thead>
                <tr>
                    <td>Câu 1</td>
                    <td id = "td1"><i class="fa-solid fa-spinner fa-pulse"></i></td>
                </tr>
                <tr>
                    <td>Câu 2</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Câu 3</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Câu 4</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Câu 5</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Câu 6</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Câu 7</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Câu 8</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Câu 9</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Câu 10</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>


<script>
    var x = document.getElementById("myVideo");

    var video = document.getElementsByTagName('video')[0];

    video.onended = function(e) {
        chuyenVideo();
    };
    //Nhan phim cach de dat co
    document.addEventListener('keydown', (event)=> {    
        if(event.key = ' ') getPoint();
    });
    //tinh diem
    function getPoint() {
        let p = 3/5;
        let getP = 17;
        let diem;
        if(x.currentTime >= getP && x.currentTime <= getP+p){
            diem = "5/5";
        }else if(x.currentTime >= getP+p && x.currentTime <= getP+2*p){
            diem = "4/5";
        }else if(x.currentTime >= getP+2*p && x.currentTime <= getP+3*p){
            diem = "3/5";
        }else if(x.currentTime >= getP+3*p && x.currentTime <= getP+4*p){
            diem = "2/5";
        }else if(x.currentTime >= getP+4*p && x.currentTime <= getP+5*p){
            diem = "1/5";
        }else{
            diem = "0/5";
        }
        document.getElementById("td1").innerHTML = diem;
        CamCo();
    }
    //chuyen video
    function chuyenVideo(){
        let vid = document.getElementById("myVideo");
        vid.src = "video/MoPhong/De1/2.mp4";
        vid.load();
        vid.played();
    }
    var width;
    var i = 0;
    function move() {
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            width = 1;
            var id = setInterval(frame, 10);
            function frame() {
                if(width == 27){
                    clearInterval(id);
                    i = 0;
                }else{
                    let t = parseInt(x.currentTime);
                    let second;
                    if(t < 10) second = '0' + t;
                    else second = t;
                    document.getElementById("time").innerHTML = "Thời gian: 00:" + second + "/00:27";
                    width = x.currentTime/27*100;
                    elem.style.width = width + "%";
                }
            }
        }
    }

    function CamCo(){
        document.getElementById("flag").style.marginLeft = width + "%";
        document.getElementById("flag").innerHTML = "<i class='fa-solid fa-flag'> " + parseInt(x.currentTime) + "s";
        document.getElementById("p1").style.marginLeft = (17/27*100) + "%";
        document.getElementById("p1").style.opacity = "1";
        document.getElementById("p2").style.opacity = "1";
        document.getElementById("p3").style.opacity = "1";
        document.getElementById("p4").style.opacity = "1";
        document.getElementById("p5").style.opacity = "1";
    }
</script>
</body>
</html>