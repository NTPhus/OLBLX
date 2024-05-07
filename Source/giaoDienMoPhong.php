<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<video id = "myVideo" width="800" height="740" autoplay muted>
  <source src="video/1.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<button onclick="getPoint()">Đặt cờ</button>
<script>
    var x = document.getElementById("myVideo");
    function getPoint() {
        let p = 3/5;
        let getP = 17;
        alert(x.currentTime);
        if(x.currentTime >= getP && x.currentTime <= getP+p){
            alert("5/5");
        }else if(x.currentTime >= getP+p && x.currentTime <= getP+2*p){
            alert("4/5");
        }else if(x.currentTime >= getP+2*p && x.currentTime <= getP+3*p){
            alert("3/5");
        }else if(x.currentTime >= getP+3*p && x.currentTime <= getP+4*p){
            alert("2/5");
        }else if(x.currentTime >= getP+4*p && x.currentTime <= getP+5*p){
            alert("1/5");
        }
    }
</script>
</body>
</html>