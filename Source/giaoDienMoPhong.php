<?php
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
    <title>ôn thi mô phỏng</title>
    <link rel="stylesheet" href="CSS/MoPhong.css">
</head>
<body>
    <div class="containter" id="container">
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
                    <td id = "td2"></td>
                </tr>
                <tr>
                    <td>Câu 3</td>
                    <td id = "td3"></td>
                </tr>
                <tr>
                    <td>Câu 4</td>
                    <td id = "td4"></td>
                </tr>
                <tr>
                    <td>Câu 5</td>
                    <td id = "td5"></td>
                </tr>
                <tr>
                    <td>Câu 6</td>
                    <td id = "td6"></td>
                </tr>
                <tr>
                    <td>Câu 7</td>
                    <td id = "td7"></td>
                </tr>
                <tr>
                    <td>Câu 8</td>
                    <td id = "td8"></td>
                </tr>
                <tr>
                    <td>Câu 9</td>
                    <td id = "td9"></td>
                </tr>
                <tr>
                    <td>Câu 10</td>
                    <td id = "td10"></td>
                </tr>
            </table>
        </div>
    </div>

<script>

    let data = <?php echo json_encode($data) ?>;

    let videos = [{
        cau: parseInt(data[0]),
        start: parseInt(data[1]),
        end: parseInt(data[2]),
        length: parseInt(data[3]),
    }, ];

    for(let i=4; i<data.length;i+=4)
        videos.push({
            cau:parseInt(data[i]),
            start:parseInt(data[i+1]),
            end:parseInt(data[i+2]),
            length:parseInt(data[i+3]),
        });

    var x = document.getElementById("myVideo");

    var video = document.getElementsByTagName('video')[0];

    var currentIndex = 0;

    var trangThai = false;

    video.onended = function(e) {
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
        document.getElementById("td" + (currentIndex+1)).innerHTML = diem;
        CamCo();
    }
    //chuyen video
    function chuyenVideo(){
        let vid = document.getElementById("myVideo");
        vid.src = "video/MoPhong/"+ (currentIndex+2) +".mp4";
        vid.load();
        currentIndex++;
        document.getElementById("td" + (currentIndex+1)).innerHTML = "<i class='fa-solid fa-spinner fa-pulse'></i>";
        document.getElementById("p1").style.opacity = "0";
        document.getElementById("p2").style.opacity = "0";
        document.getElementById("p3").style.opacity = "0";
        document.getElementById("p4").style.opacity = "0";
        document.getElementById("p5").style.opacity = "0";
        document.getElementById("flag").innerHTML = "";
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
        document.getElementById("flag").style.marginLeft = width + "%";
        let currentTime = parseInt(x.currentTime);
        document.getElementById("flag").innerHTML = "<i class='fa-solid fa-flag'> " + currentTime + "s";
        
        //chỉnh sửa kích thước của từng check point
        document.getElementById("p1").style.marginLeft = (videos[currentIndex].start/videos[currentIndex].length*100) + "%";
        document.getElementById("p1").style.width = size + "%";
        document.getElementById("p2").style.width = size + "%";
        document.getElementById("p3").style.width = size + "%";
        document.getElementById("p4").style.width = size + "%";
        document.getElementById("p5").style.width = size + "%";

        //hien thi dap an
        document.getElementById("p1").style.opacity = "1";
        document.getElementById("p2").style.opacity = "1";
        document.getElementById("p3").style.opacity = "1";
        document.getElementById("p4").style.opacity = "1";
        document.getElementById("p5").style.opacity = "1";
    }
</script>

</body>
</html>