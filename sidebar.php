<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
        .adminmenuback{
            left: 0px;
            width: 70px;
            height: 750px;
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
            height: 750px;
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


        


    </style>
</head>
<body>
<div class="adminmenuback">
                <div class="admin_text">
                    <i class="ri-user-settings-fill"></i>
                    <h1>ADMIN</h1>
                </div>
            
                <ul>
                    <li class ="navActive" id="qltk">
                         <i class="ri-account-circle-fill"></i>
                        <a href="quanLyTaiKhoan.php">Quản Lý Tài Khoản</a>
                    </li>

                    <li class ="navActive" id="slt">
                        <i class="ri-question-fill"></i>
                        <a href="suaLyThuyet.php">Thêm Câu Hỏi</a>
                    </li>

                    <li class ="navActive" id="thmde">
                        <i class="ri-file-upload-fill"></i>
                        <a href="themDeLyThuyet.php">Thêm Đề LT, MT</a>
                    </li>

                    <li class ="navActive" id="thmvideo">
                        <i class="ri-video-add-line"></i>
                        <a href="themVideo.php">Thêm Video MP</a>
                    </li>
                    
                    <li class ="navActive" id="tdd">
                        <i class="ri-map-pin-add-line"></i>
                        <a href="themDiaDiem.php">Thêm Địa Điểm</a>
                    </li>

                </ul>
            </div>

</body>
</html>