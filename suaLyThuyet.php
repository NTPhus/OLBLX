<?php
    include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm đề lý thuyết</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <script src="https://kit.fontawesome.com/5263b3717e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    

    <style>
        .adminmenuback{
            left: 0px;
            width: 70px;
            height: 100%;
            background: #162938;
            transition: width 0.6;
        }

        .admin_text h1{
            margin-bottom: 0;
            margin-top: -5px;
            opacity: 0;
            pointer-events: none;
            transition: 0.3s ease;

        }
        .admin_text{
            display: flex;
            padding: 20px 0;
           cursor: pointer;
            margin-left: 5px;
            color: #fff;

            box-sizing: border-box;
        }

        .adminmenuback ul  {
            display: block;
           cursor: pointer;
            margin-left: 5px;
            color: #fff;
            box-sizing: border-box;


        }
       .adminmenuback ul li{
            list-style: none;
            padding: 12px 0;
        }
        .adminmenuback ul li{
            margin: 5px 0;
        }
        .active, .adminmenuback ul li:hover{
            background: #0099FF;
            border-radius: 10px;
        }

        .adminmenuback ul li i, .admin_text i {
            padding: 0 12px;
            font-size: 24px;
        }
        .adminmenuback ul li a{
            color: #fff;
            text-decoration: none;
            opacity: 0;
            pointer-events: none;
            
        }

        .adminmenuback:hover{
            width: 260px;
            
        }
        .adminmenuback:hover ul li a{
            opacity: 1;
            pointer-events: auto;
        }

        .adminmenuback:hover h1
        {
            opacity: 1;
            pointer-events: auto;
        }

        .form_admin{
            position: relative;
            display: flex;
            background: #ddd;
            height: 650px;
        }

        .admin_container{
            padding-left: 25px;
            font-size: 20px;
            width: 500px;
        }
        
        #Add_question{
            font-size: 25px;
            text-transform: uppercase;
            font-weight: 600;
            margin: 20px 0;
            font-family: math;
            letter-spacing: 1.5px;
        }

        #chuong, #cau_diem_liet ,#question, #answer{
            display: flex;
            padding: 15px 0;
            justify-content: space-between;
        }
       
        .admin_container input[type=text],
        .admin_container select
        {
            margin-left: 40px;
            width: 300px;
            height: 30px;
            outline: none;
        }

        .upload_img{
            display: flex;
            position: absolute;
            right: 10%;
            top: 30%;
        }

        #drop_area{
            width: 500px;
            height: 300px;
            padding: 30px;
            background: #fff;
            text-align: center;
            border-radius: 20px;
        }

        #img_view{
            width: 100%;
            height: 100%;
            border-radius: 20px;
            border: 2px dashed #bbb5ff;
            background: #f7f8ff;
            background-position: center;
            background-size: cover;
        }

        #img_view i{
            width: 100px;
            margin-top: 25px;
        }

        #img_view span{
            display: block;
            font-size: 15px;
            color: #777;
            margin-top: 15px;
        }

        .btn_addquestion{
            margin-left: 36%;
            margin-top: 40px;
            padding: 15px 58px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn_addquestion:hover{
            color:#fff;
            font-weight: 600;
            background: #0099FF;
            border: 1px solid #999999;
            box-shadow: 0px 0px 10px #03e9f4;
        }

        
        .block{
            display: flex;
        }

    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class = "form_admin">
        <?php include 'sidebar.php'; ?>
        <form class="admin_container" action="XuLyPHP/XuLy.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="action" value="themCauHoi" id="" hidden>
            <p id="Add_question">Thêm câu hỏi</p>
            <div id="chuong">
                <p>Chương</p>
                <select id="" name="chuong">
                    <option value="1">Chương 1</option>
                    <option value="2">Chương 2</option>
                    <option value="3">Chương 3</option>
                    <option value="4">Chương 4</option>
                    <option value="5">Chương 5</option>
                    <option value="6">Chương 6</option>
                    <option value="7">Chương 7</option>

                </select>   
                
                
            </div>
            <div id="cau_diem_liet">
                <p>Câu điểm liệt </p><input type="text" name="cauDiemLiet" id="">
            </div>

            <div id="question">
                <p>Câu hỏi:</p>
                <input type="text" name="cauhoi">
            </div>

            <div>
                <div id="answer">
                    <p>Đáp án 1</p>
                    <input type="text" name="dapan1">
                </div>

                <div id="answer">
                    <p>Đáp án 2</p>
                    <input type="text" name="dapan2">
                </div>

                <div id="answer">
                    <p>Đáp án 3</p>
                    <input type="text" name="dapan3">
                </div>

                <div id="answer">
                    <p>Đáp án 4</p>
                    <input type="text" name="dapan4">
                </div>

                <div id="answer">
                    <p>Đáp án đúng</p>
                    <select id="" name="dapandung">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>   
                </div>
                
            </div>
            <input class ="btn_addquestion" onclick="reg()" type="submit" value="Thêm câu hỏi">

            </div>
          <div class="upload_img">
                <label for="input_file" id="drop_area">
                    <input type="file" accept="image/*" name="img" id="input_file" hidden>
                    <div id="img_view">
                        <i class="fa-solid fa-cloud-arrow-up" style="font-size: 100px; color: #0099CC;"></i>
                        <p>Kéo và thả hoặc click tại đây <br> để tải ảnh lên</p>
                        <span>Tải ảnh bất kỳ từ máy của bạn</span>
                    </div>
                    </label>
        </div>
        </form>    
        <?php include 'footer.php'?>
   <script>

  const dropArea = document.getElementById("drop_area");
const inputFile = document.getElementById("input_file" );
const imgView = document.getElementById("img_view");

inputFile.addEventListener("change", uploadImage);
 
 function uploadImage(){
  let imgLink = URL.createObjectURL(inputFile.files[0]);
  imgView.style.backgroundImage = `url(${imgLink})`;
  imgView.textContent = "";
  imgView.style.border = 0;
 }

 //Chuc nang dung de keo tha anh
 dropArea.addEventListener("dragover", function(e)
    {
        e.preventDefault();
    });
    dropArea.addEventListener("drop", function(e){
        e.preventDefault();
        inputFile.files = e.dataTransfer.files;
        uploadImage();
    });

    document.getElementById("slt").style.backgroundColor = "#0099FF";
</script>


</body>
</html>