<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="CSS/grid.css">
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Times New Roman', Times, serif;
        }
        .footer{

        margin-top: auto;
        background: #162938;
        width: 100%;
        height: 550px;

        }

        .footer-container{
        padding: 20px 8%;
        }

        .footer-container .footer-heading
        {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: #fff;
        padding: 30px 0px;
        font-weight: 600;
        }

        .footer-container .footer-title
        {
        color: #fff;
        opacity: 0.5;
        font-size: 18px;
        line-height: 1.5;
        margin-bottom: 20px;
        }

        .footer-container a.Brand 
        {
        font-family: Georgia, 'Times New Roman', Times, serif;
        text-decoration: none;
        font-size: 20px;
        letter-spacing: 2px;
        color: #fff;
        
        }

        .footer__post-title{
        font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: #fff;
        font-weight: 300;
        text-transform: uppercase;
        margin-bottom: 10px;
        }  


        .footer-item a.transfer {
        text-decoration: none;
        color: #fff;
        letter-spacing: 1px;
        }

        .footer-item a.transfer:hover{
        text-decoration-line: underline;
        }
        .footer-item .contact{
        color: #fff;
        margin-bottom: 10px;
        margin-right: 50px;
        font-size: 20px;
        }
        .email{
        width: 250px;
        position: relative;
        height: 100px;
        }
        .email-container{
        display: flex;
        width: 250px;
        }
        .icon-mail{
        display: flex;
        padding: 10px;
        background: #999999;
        color: #55595b;
        align-items: center;
        justify-content: center;
        }

        input[type="text"]{
        height: 50px;
        width: 250px;
        }

        input[type="text"]::placeholder {
        padding: 20px;
        }

        .btn-send{
        position: absolute;
        right: 0px;
        bottom: 0px;
        padding: 15px;
        background: yellow;
        cursor: pointer;
        width: 80px;
        line-height: 0px;
        margin-right: -2px;
        }
        .ri-arrow-right-s-line{
            color: yellow;
            font-size: 15px;
            font-weight: 900;
        }
        
    </style>
</head>
<body>
    <!-- FOOTER -->
    <div class="footer">
        <div class="row footer-container">
           <!-- ND 1 -->
           <div class="col l-3 footer-item">
               <h2 class="footer-heading">GIỚI THIỆU</h2>
               <p class="footer-title"> 
                   Chúng tôi cung cấp một nền tảng cung cấp những khoá học miễn phí để hỗ trợ người học lái xe ô
                   tô.
                   Các bài học được thiết kế chuẩn theo giáo trình của Bộ GTVT.
                   Với giao diện thân thiện, dễ sử dụng sẽ giúp các học viên học tập tốt hơn. 
               </p>
               <br><a class="Brand"href="#">THILAIXE.VN</a>
           </div>

           <!-- ND 2 -->
           <div class="col l-3 footer-item">
               <h2 class="footer-heading">CÁC BÀI ÔN THI</h2>
               <h4 class="footer__post-title">Ôn tâp và thi thử 120 tình huống mô phỏng</h4>
               <p class="footer-title"> 
                   Phần mềm ôn tập 120 tình huống mô phỏng giao thông online online và bộ 15 đề thi chuẩn nhằm đánh giá năng lực học viên để chuẩn bị sát hạch...
               </p>
               <h4 class="footer__post-title">Ôn tập và thi thử 600 câu hỏi lý thuyết và mẹo làm bài</h4>
               <p class="footer-title"> 
                   Tập tài liệu gồm 600 câu hỏi lý thuyết, hơn 18 đề thi chuẩn để ôn luyện và nhiều mẹo thi lý thuyết sát hạch GPLX ô tô 100% đậu...
               </p>

               <a class ="transfer" href="">Xem tất cả bài ôn thi </a> <i class="ri-arrow-right-s-line"></i>
           </div>

           <!-- ND 3 -->
           <div class="col l-3 footer-item">
               <h2 class="footer-heading">LIÊN HỆ</h2>
               <div class="contact">
                   <i class="ri-phone-fill"> +84 888888888</i>
               </div>
               <div class="contact">
                   <i class="ri-facebook-circle-fill"></i>
                   <a class="transfer" href="">Thi lái xe</a>
               </div>
               <div class="contact">
                   <i class="ri-mail-fill"></i> 
                   thilaixevn@gmail.com
                   
               </div>
           </div>

           <!-- ND 4 -->
           <div class="col l-3 footer-item">
               <h2 class="footer-heading">THEO DÕI CHÚNG TÔI</h2>
               <p class="footer-title"> 
                   Hãy để lại email để nhận thông báo các khoá học và bài viết mới nhất về thi GPLX ô tô
                   <div class="email">
                       <div class="email-container">
                       <i class="icon-mail ri-mail-open-fill"></i>
                       <input class="input-email" type="text" placeholder="Nhập email của bạn">
                       </div>
                       <button class="btn-send" type="submit"><i class="ri-send-plane-fill"></i>Gửi</button>
                   </div>
                   
           </div>
       </div>
   </div>
</body>
</html>