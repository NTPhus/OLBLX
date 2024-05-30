<?php
    include("session.php");
    $conn = mysqli_connect("localhost", "root", "", "olblx");
    $sql = "SELECT * FROM video_mo_phong";
    $res = mysqli_query($conn, $sql);
    $data = [];
    while($row = mysqli_fetch_array($res)){
        array_push($data, $row["cau"]);
        array_push($data, $row["start"]);
        array_push($data, $row["end"]);
        array_push($data, $row["dodaivideo"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5263b3717e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>ôn thi mô phỏng</title>
    <!-- <link rel="stylesheet" href="CSS/giaoDienMoPhong.css"> -->
    <link rel="stylesheet" href="CSS/grid.css">
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
    .red{
        color: red !important;
    }


#myVideo{
    border-right: 1px solid;
    display: block;
    height: 450px;
    z-index: -1;
}

#container{
    display: inline-block;
    margin-bottom: 20px;
}
.item1{
    width: 800px;
    float: left;
    margin-left: 70px;
}
.item2{
    height: 440px;
    width: 500px;
    float: right;
    overflow: scroll;
    border: 1px solid;
    margin-right: 70px;
}

.btnDatCo{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-left: -5px;
    margin-top: 20px;
    height: 50px;
    width: 800px;
    border-radius: 5px;
    font-size: 20px;
    background: #0066CC;
    color: yellow;
    font-weight: 800;
    letter-spacing: 1px;
    border: 1px solid #003366;
    cursor: pointer;
}

.btnDatCo:hover{
    background-color: #3399CC;
}

.btn{
    display: inline-block;
    height: 40px;
    width: 40px;
    margin: 10px 10px;
    border-radius: 10px;
    border: 1px solid #888888;
    cursor: pointer;
}

.btn:hover{
    background-color: 	#CCCCCC;
}
.button{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left:  5px;;
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
    background-color: grey;
    margin-bottom: 20px;
    width: 800px;
}

#myBar {
    width: 1%;
    height: 34px;
    background-color: green;
}

.bar-block{
    width: 800px;

}

#time{
    margin-top: -22px;
    z-index: 10;
    text-align: center;
    font-size: 20px;
    color: yellow;
}

#bar{
    background-color: gray;
    height: 5px;
    width: 800px;
    display: flex;
}

#p1, #p2, #p3, #p4, #p5{
    height: 5px;
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

.result-bar{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 10px;
    height: 70px;
    border: 1px solid;
    font-size: 20px;
    width: 500px;
    float: right;
    margin-right: 70px;
    background: 	#162938;
    color: yellow;
    border: 2px solid #003399;
}

#diem{
    color: red;
}

.Text_page{
    display: flex;
    padding: 20px 0;
    margin-left: 40px;
}

.Text_page_heading{
    color: black;
    margin-left: 70px;
}

#Text_page:hover{
    color: red;
}

u{
    text-decoration: none;
}

.result-bar_text {
    animation: result-bar_text-opacity 1s infinite, result-bar_text-color 3s infinite;
}

.result-bar_text u, .result-bar_text span{
    font-weight: 600;
}

.ri-flag-fill
{
    font-size: 20px;
    color: red;

}
    </style>
</head>
<body>
    <?php include 'header.php'?>
        <div class="video_container">
            <div class="Text_page">
                <h3 class="Text_page_heading red"></h3>
            </div>
            <div id="container">
                <div class="item1">
                    <div class="video">
                        <video id = "myVideo" width="800" height="740" controls muted onclick="move()">
                            <source src="video/MoPhong/1.mp4" type="video/mp4" id="source">
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
                        <button class="btnDatCo" onclick="getPoint()">ĐẶT CỜ <i class="ri-flag-fill"></i> </button>
                    </div>
                </div>
                <div class="result-bar">
                        <p class="result-bar_text"><u>Tình huống <span id="cauSo">1</span></u>: <span id="rs">Nhấn phím cách hoặc ấn nút đặt cờ khi phát hiện tình huống</span></p>
                </div>
                <div class="item2">
                    <?php 
                        for($i = 1; $i <= 120; $i++){
                            echo "<button class='btn' id='btn$i' onclick='chuyenCau($i)'>$i</button>";
                        }
                    ?>
                </div>
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

    video.onended = function(e) {
        chuyenCau(currentIndex+1);
        chuyenVideo();
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
            diem = "5/5";
            document.getElementById("rs").innerHTML = "<span id='diem'>"+diem+"</span> bạn đang làm rất tốt!";
        }else if(x.currentTime >= getP+p && x.currentTime <= getP+2*p){
            diem = "4/5";
            document.getElementById("rs").innerHTML = "<span id='diem'>"+diem+"</span> bạn đang làm rất tốt!";
        }else if(x.currentTime >= getP+2*p && x.currentTime <= getP+3*p){
            diem = "3/5";
            document.getElementById("rs").innerHTML = "<span id='diem'>"+diem+"</span> bạn đang làm rất tốt!";
        }else if(x.currentTime >= getP+3*p && x.currentTime <= getP+4*p){
            diem = "2/5";
            document.getElementById("rs").innerHTML = "<span id='diem'>"+diem+"</span> bạn đang làm rất tốt!";
        }else if(x.currentTime >= getP+4*p && x.currentTime <= getP+5*p){
            diem = "1/5";
            document.getElementById("rs").innerHTML = "<span id='diem'>"+diem+"</span> bạn cần làm tốt hơn để đạt điểm cao hơn!";
        }else{
            diem = "0/5";
            document.getElementById("rs").innerHTML = "<span id='diem'>"+diem+"</span> bạn chưa chọn đúng thời điểm!";
        }
        CamCo();
    }
    //chuyen video
    function chuyenVideo(){
        let vid = document.getElementById("myVideo");
        vid.src = "video/MoPhong/"+ (currentIndex) +".mp4";
        document.getElementById("p1").style.opacity = "0";
        document.getElementById("p2").style.opacity = "0";
        document.getElementById("p3").style.opacity = "0";
        document.getElementById("p4").style.opacity = "0";
        document.getElementById("p5").style.opacity = "0";
        document.getElementById("flag").innerHTML = "";
        document.getElementById("cauSo").innerHTML = (currentIndex);
        document.getElementById("rs").innerHTML = "Nhấn phím cách hoặc ấn nút đặt cờ khi phát hiện tình huống";
        x.play();
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
                if(width == videos[currentIndex].length){
                    clearInterval(id);
                    i = 0;
                }else{
                    let t = parseInt(x.currentTime);
                    let second;
                    if(t < 10) second = '0' + t;
                    else second = t;
                    document.getElementById("time").innerHTML = "Thời gian: 00:" + second + "/00:" + videos[currentIndex].length;
                    width = x.currentTime/videos[currentIndex].length *100;
                    elem.style.width = width + "%";
                }
            }
        }
    }

    function CamCo(){
        let size = ((videos[currentIndex].end -videos[currentIndex].start)/videos[currentIndex].length * 100)/5;
        document.getElementById("flag").style.marginLeft = (x.currentTime/videos[currentIndex].length * 100) + "%";
        let currentTime = parseInt(x.currentTime);
        document.getElementById("flag").innerHTML = "<i class='ri-flag-fill'>" + currentTime + "s";
        //chỉnh sửa kích thước của từng check point
        document.getElementById("p1").style.marginLeft = (videos[currentIndex].start/videos[currentIndex].length*100) + "%";
        document.getElementById("p1").style.width = size + "%";
        document.getElementById("p2").style.width = size + "%";
        document.getElementById("p3").style.width = size + "%";
        document.getElementById("p4").style.width = size + "%";
        document.getElementById("p5").style.width = size + "%";
        console.log((x.currentTime/videos[currentIndex].length * 100));
        //hien thi dap an
        document.getElementById("p1").style.opacity = "1";
        document.getElementById("p2").style.opacity = "1";
        document.getElementById("p3").style.opacity = "1";
        document.getElementById("p4").style.opacity = "1";
        document.getElementById("p5").style.opacity = "1";
    }

    function chuyenCau(cau){
        document.getElementById("btn"+(currentIndex)).style.backgroundColor = "#FFFF00";
        currentIndex = cau;
        markCurrentIndex();
        chuyenVideo();
    }

    function markCurrentIndex(){
        document.getElementById("btn"+(currentIndex)).style.backgroundColor = "aqua";
    }
    x.play();
    markCurrentIndex();
</script>

</body>
</html>