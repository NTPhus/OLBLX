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
            height: 100%;
            position: fixed;
            background: #162938;
            transition: width 0.6;
            z-index: 999999;
        }
        
        /* .admin_text i{
            font-size: 30px;
            padding-right: 20px;
             margin-left: -55px;

        } */

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
            /* line-height: 65px; */
            margin-left: 5px;
            color: #fff;

            box-sizing: border-box;
        }

        .adminmenuback ul  {
            display: block;
            /* height: 100%; */
           cursor: pointer;
            /* line-height: 65px; */
            margin-left: 5px;
            color: #fff;

            box-sizing: border-box;


        }
       .adminmenuback ul li{
            list-style: none;
            padding: 15px 0;
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
        /*ul li:hover{
            padding-left: 30px;
        }

        .adminmenuback ul a i{
            margin-right: 16px;
        }


 
        .form_admin{
            
        }

        form{ */

        


    </style>
</head>
<body>
<div class="adminmenuback">
                <div class="admin_text">
                    <i class="ri-user-settings-fill"></i>
                    <h1>ADMIN</h1>
                </div>
            
                <ul>
                    <li class ="navActive">
                         <i class="ri-account-circle-fill"></i>
                        <a href="#">Quản Lý Tài Khoản</a>
                    </li>

                    <li class ="navActive">
                        <i class="ri-question-fill"></i>
                        <a href="#">Thêm Câu Hỏi</a>
                    </li>

                    <li class ="navActive">
                        <i class="ri-file-upload-fill"></i>
                        <a href="#">Thêm Đề Lý Thuyết</a>
                    </li>

                    <li class ="navActive">
                        <i class="ri-video-add-line"></i>
                        <a href="#">Thêm Video Mô Phỏng</a>
                    </li>

                    <li class ="navActive">
                        <i class="ri-video-upload-fill"></i>
                        <a href="#">Thêm Đề Mô Phỏng</a>
                    </li>
                    
                    <li class ="navActive">
                        <i class="ri-map-pin-add-line"></i>
                        <a href="#">Thêm Địa Điểm</a>
                    </li>

                </ul>
            </div>
</body>
</html>