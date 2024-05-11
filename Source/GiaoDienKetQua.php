<?php 
    $rs = $_POST['result'];
    $ans = $_POST['answer'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
	width:100%;
	height:100%;
	
}
.contain{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background: linear-gradient(90deg,#189086,#2f8198);
background-image: linear-gradient(to bottom right,#02b3e4,#02ccba);	
}

.done{
	width:100px;
	height:100px;
	position:relative;
	left: 0;
	right: 0;
	top:-20px;
	margin:auto;
}
.contain h1{
	font-family: 'Julius Sans One', sans-serif;
	font-size:1.4em;
	color: #02b3e4;
}

.congrats{
	position:relative;
	left:50%;
	top:50%;
	max-width:800px;	transform:translate(-50%,-50%);
	width:80%;
	min-height:300px;
	max-height:900px;
	border:2px solid white;
	border-radius:5px;
	    box-shadow: 12px 15px 20px 0 rgba(46,61,73,.3);
    background-image: linear-gradient(to bottom right,#02b3e4,#02ccba);
	background:#fff;
	text-align:center;
	font-size:2em;
	color: #189086;
}

.text{
	position:relative;
	font-weight:normal;
	left:0;
	right:0;
	margin:auto;
	width:80%;
	max-width:800px;

	font-family: 'Lato', sans-serif;
	font-size:0.6em;

}


.circ{
    opacity: 0;
    stroke-dasharray: 130;
    stroke-dashoffset: 130;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    -ms-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}
.tick{
    stroke-dasharray: 50;
    stroke-dashoffset: 50;
    -webkit-transition: stroke-dashoffset 1s 0.5s ease-out;
    -moz-transition: stroke-dashoffset 1s 0.5s ease-out;
    -ms-transition: stroke-dashoffset 1s 0.5s ease-out;
    -o-transition: stroke-dashoffset 1s 0.5s ease-out;
    transition: stroke-dashoffset 1s 0.5s ease-out;
}
.drawn svg .path{
    opacity: 1;
    stroke-dashoffset: 0;
}

.regards{
	font-size:.7em;
}


@media (max-width:600px){
	.congrats h1{
		font-size:1.2em;
	}
	
	.done{
		top:-10px;
		width:80px;
		height:80px;
	}
	.text{
		font-size:0.5em;
	}
	.regards{
		font-size:0.6em;
	}
}

@media (max-width:500px){
	.congrats h1{
		font-size:1em;
	}
	
	.done{
		top:-10px;
		width:70px;
		height:70px;
	}
	
}

@media (max-width:410px){
	.congrats h1{
		font-size:1em;
	}
	
	.congrats .hide{
		display:none;
	}
	
	.congrats{
		width:100%;
	}
	
	.done{
		top:-10px;
		width:50px;
		height:50px;
	}
	.regards{
		font-size:0.55em;
	}
	
}

body {
  height: 80vh;
  display: grid;
  place-items: center;
}

.check_mark {
  position: relative;
  width: 180px;
  height: 180px;
  font-size: 180px;
  display: grid;
  place-content: center;
  border-radius: 50%;
  border: solid 8px black;
  z-omdex: -1;
}

.check_mark::before {
  content: "";
  width: 100px;
  height: 40px;
  border-left: solid 10px black;
  border-bottom: solid 10px black;
  transform: rotate(-45deg) translate(5px,-5px)
}

.check_anime_outer {
	width: 200px;
	height: 200px;
	margin: 30px 80px;
	position: relative;
}
.check_anime_mask {
	width: 100px;
	height: 200px;
	overflow: hidden;
	position: absolute;
	top: 0;
  z-index: 1;
}
.check_anime_mask_right {
	right: 0;
}
.check_anime_mask_left {
	left: 0;
}
.check_anime_mask_right::before {
	content: '';
	position: absolute;
	width: 100px;
	height: 230px;
	background-color: white;
	top: 0;
	right: 0;
  z-index: 1;
	transform-origin: 0px 100px;
	animation: right-sq 1s 1s forwards linear 1;
}
.check_anime_mask_left::before {
	content: '';
	position: absolute;
  z-index: 1;
	width: 100px;
	height: 230px;
	background-color: white;
	transform-origin: 100px 80px;
	animation: left-sq 1s 2s forwards linear 1;
}
.check_mask {
	width: 120px;
	height: 120px;
	display: inline-block;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
  z-index: 1;
	margin: auto;
	background-image: linear-gradient(white,white);
	background-repeat: no-repeat;
	animation: check-ap 1s 3s linear forwards 1;
}
@keyframes right-sq {
	from {
		transform: rotate(0deg);
	}
	to {
		transform: rotate(180deg);
	}
}
@keyframes left-sq {
	from {
		transform: rotate(0deg);
	}
	to {
		transform: rotate(180deg);
	}
}
@keyframes check-ap {
	form {
		background-position: 0;
	}
	to {
		background-position: 150px;
	}
}

    </style>
</head>
<body>
<div class="contain">
	<div class="congrats">
		<h1>Congrat<span class="hide">ulation</span>s !</h1>
		<div class="done">
        <div class="check_anime_outer">
            <div class="check_anime_mask check_anime_mask_right"></div>
            <div class="check_anime_mask check_anime_mask_left"></div>
            <span class="check_mask"></span>
            <div class="check_mark"></div>
        </div>
			</div>
		<div class="text">
		<p>You have successfully booked an appointment with us. <br>Here are your details<br>Date: 12.12.12<br>
			Time: 11am<br>
			ID: 12324
		</p>
			<p>Eagerly awaiting your visit
			</p>
			</div>
		<p class="regards">Regards, Team Tarini Netradham</p>
	</div>
</div>
<script>
    

    $(window).on("load",function(){
	
	setTimeout(function(){$('.done').addClass("drawn");},500)
	
});



</script>
</body>
</html>

