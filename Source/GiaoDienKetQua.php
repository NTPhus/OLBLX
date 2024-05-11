<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			background: #2d2d2d;
		}

		.popup_container .submitBtn{
			padding: 12px 30px;
			font-size: 18px;
			font-weight: 600;
			border: none;
			outline: none;
			border-radius: 8px;
			background: #4caf50;
			color: #fff;
			cursor: pointer;
		}

		.popup{
			width: 320px;
			background: #fff;
			padding: 20px;
			border-radius: 8px;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%) scale(0.1);
			transition: transform 0.4s, top 0.4s;
			visibility: hidden;
		}

		/* JS */
		.popup-open{
			top: 50%;
			transform: translate(-50%,-50%) scale(1);
			visibility: visible;
		}
		.popup span{
			height: 70px;
			width: 70px;
			background: #4caf50;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-top: -50px;
		}

		.popup span i{
			font-size: 30px;
			color: #fff;
		}

		.popup h1{
			margin-top: 10px;
			font-family: 'Courier New', Courier, monospace;
			color: #667285;
		}

		.popup p{
			text-align: center;
			color: #667285;
			margin: 15px 0;
		}

		.popup button{
			width: 100%;
			padding: 12px 30px;
			font-size: 18px;
			font-weight: 600;
			border: none;
			outline: none;
			border-radius: 8px;
			background: #4caf50;
			color: #fff;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="popup_container">
		<button class = "submitBtn">Submit</button>
		<div class="popup">
			<span><i class="ri-check-fill"></i></span>
			<h1>Chúc Mừng</h1>
			<p>Bạn đã hoàn thành xuất sắc bài thi!</p>
			<button class="Thoat">Thoát</button>
		</div>

	</div>

	<script>
		const submit = document.querySelector(".submitBtn");
		const popUp = document.querySelector(".popup");
		const Thoat = document.querySelector(".Thoat");

		submit.addEventListener("click", () => {
            popUp.classList.add("popup-open");
        });

		Thoat.addEventListener("click", () => {
            popUp.classList.remove("popup-open");
        });
	</script>

</body>
</html>