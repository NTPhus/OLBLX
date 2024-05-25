

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"rel="stylesheet"/>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
        }
        .yellow{
            color: #ffea00 !important;
        }
        .blue{
            color: aqua !important;
        }
        .dark{
            color: #111111;
        }
        .cau_truc{
            display: flex;
            padding: 20px 8%;
            background: url('img/bg-video.jpg');
        }
        .hang_b1, .hang_b2{
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 15px;
            font-weight: 600;
            border: none;
            background: #f4f4f4;
            box-shadow: 0px 0px 2px #ccc;
            margin-right: 10px;
        }

        .hang_b1:hover, .hang_b2:hover
        {
            background: #ffea00;
        }
        
        .cau_truc_hang_b1{
            width: 50%;
        }
        .cau_truc_heading{
            margin: 20px 0;
        }

        h3.tieu_de
        {
            text-decoration-line: underline;
            padding: 10px 0px;
        }
        p, b
        {
            margin: 10px 0px;
            font-weight: 600;
        }
        a{
            text-decoration: none;
        }
        .bang_thong_tin{
            height:110px;
            text-align: center;
            border-collapse: collapse;
            width: 600px;
        }
        td, th {
        border: 1px solid #fff; 
        padding: 5px; 
        }


        .Bat_dau{
            margin-left: 100px;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .ri-play-circle-line{
            font-size: 100px;
            padding: 10px 60px;

        }
        .click{
            background: none;
            border: none;
            cursor: pointer;
            padding: 20px;
            line-height: 35px;
        }
   
/* form thông tin */
        .form_luachon{
            display: flex;
			align-items: center;
			justify-content: center;
            z-index: 1;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 26, 51, .95);
            display: none;
        }

        .form_luachon_open{
            display: flex;
        }

        .luachon{
            width: 550px;
            height: 470px;
            background: #fff;
            box-shadow: 0px 0px 10px #ccc;
        }

        .luachon_content{
            margin-left: 5%;
            margin-top: 30px;
        }

        
        .luachon_heading{
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            background: #EEE9E9;
            
        }
        .luachon_heading h3, .luachon_heading p{
            color: #4F4F4F;
        }

        .list_choice{
                        margin: 50px 0px;

        }
        .list_choice_item{

            width: 90%;
            line-height: 30px;
            /* margin-left: 10%; */
            border: 2px solid #ccc;
            height: 50px;
            font-size: 30px;
            /* margin: 20px 0px; */
            
        }
        .list_choice_item i{
            color: #363636;
            font-size: 20px;
            background: #EEE9E9;
            padding: 15px 10px;
            padding-top: 12px;

        }
        .list_choice_item select{
            width: 85%;
            color: #001a33;
            padding: 10px 0;
            border: none;
            height: 40px;
            cursor: pointer;

        }

        select{
           margin-top: 4px;
        }
        option{
            color: #001a33;
            line-height: 20px;
            display: inline-block;
        }

        .thi_btn{
            background: #FFFF00;
            width: 80%;
            padding: 10px 50px;
            margin-left: 8%;
            color: #111111;
            font-size: large;
            font-style: 800;
            border: 1px solid #EEEE00;
            cursor: pointer;
        }
        .ri-close-large-line{
            cursor: pointer;
            color: #363636;
            padding: 15px 10px;
            padding-top: 12px;
            font-size: 20px;
        }
        #tick_green{
            background-color: green;
        }
        #tick_red{
            background-color: red;
        }
        #text_yellow{
            color: yellow;
        }
    </style>
</head>

<body>

        <div class="cau_truc">
            

            <div class="cau_truc_hang_b1">

                <!-- THONG TIN BANG B1 -->
                <!-- <h2 class ="cau_truc_heading">THÔNG TIN VÀ CÁCH THỨC THI THỬ LÝ THUYẾT LÁI XE HẠNG B1</h2> -->

                <!-- A -->
                <!-- <div class="Cau_truc_de_thi">
                    <h3 class="tieu_de">A. Cấu trúc đề thi</h3>
                    <p>Đề thi gồm 30 câu hổi được phân bố như sau</p>
                    <table class="bang_thong_tin"  >
                        <tbody>
                            <th><p>Chương</p></th>
                            <th colspan="2"><p>Nội dung</p></th>
                            <th><p>Thư viện(câu)</p></th>
                            <th><p>ĐỀ THI(câu)</p></th> -->

                            <!-- CHƯƠNG 1 -->
                            <!-- <tr>
                                <td rowspan="3"> 1 </td>
                                <td rowspan="3"> Khái niệm và quy tắc giao thông đường bộ </td>
                                <td>Khái niệm</td>
                                <td rowspan="3"> 166 </td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Quy tắc</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Tốc độ, khoảng cách</td>
                                <td>1</td>
                            </tr> -->

                            <!-- CHƯƠNG 2 -->
                            <!-- <tr>
                                <td>2</td>
                                <td colspan="2">Nghệp vụ vận tải</td>
                                <td>26</td>
                                <td>0</td>
                            </tr> -->

                            <!-- CHƯƠNG 3 -->
                            <!-- <tr>
                                <td>3</td>
                                <td colspan="2">Văn hóa giao thông và đạo đức người lái xe</td>
                                <td>21</td>
                                <td>1</td>
                            </tr> -->

                            <!-- CHƯƠNG 4 -->
                            <!-- <tr>
                                <td>4</td>
                                <td colspan="2">Kỹ thuật lái xe</td>
                                <td>56</td>
                                <td>1</td>
                            </tr> -->

                            <!-- CHƯƠNG 5 -->
                            <!-- <tr>
                                <td>5</td>
                                <td colspan="2">Cấu tạo và sửa chữa</td>
                                <td>35</td>
                                <td>1</td>
                            </tr> -->

                            <!-- CHƯƠNG 6 -->
                            <!-- <tr>
                                <td>6</td>
                                <td colspan="2">Biến báo hiệu đường bộ</td>
                                <td>182</td>
                                <td>9</td>
                            </tr> -->

                            <!-- CHƯƠNG 7 -->
                            <!-- <tr>
                                <td>7</td>
                                <td colspan="2">Giải các thế sa hình và kỹ năng xử lý tình huống giao thông</td>
                                <td>114</td>
                                <td>9</td>
                            </tr> -->

                            <!-- CHƯƠNG 8 -->
                            <!-- <tr>
                                <td>8</td>
                                <td colspan="2">Câu hỏi về tình huống mất an toàn giao thông nghiêm trọng (điểm liệt)</td>
                                <td></td>
                                <td>1</td>
                            </tr> -->
                            
                            <!-- TỔNG  -->
                            <!-- <tr>
                                <td>Tổng</td>
                                <td colspan="2"></td>
                                <td>600</td>
                                <td>30</td>
                            </tr>

                        </tbody>
                    </table>
                </div> -->

                <!-- B -->
                <!-- <div class="Phuong_phap_cham_diem">
                    <h3 class="tieu_de">B. Phương pháp chấm điểm</h3>
                    <p>- Mỗi người có 20 phút làm bài trắc nghiệm về những câu hỏi đã được học trong 
                        <a class ="600_cau yellow"href="#"> 600 câu hỏi ôn tập lý thuyết</a>
                    </p>
                    <p>- Mỗi câu có duy nhất một đáp án đúng. Trả lời đúng 1 câu được 1 diểm.</p>

                </div> -->

                <!-- C -->
                <!-- <div class="c_danh_gia">
                    <h3 class="tieu_de">C. Đánh giá</h3>
                    <table class="bang_thong_tin">
                        <tr>
                            <td>Tổng điểm</td>
                            <td>30</td>
                            <td>Đề thi 30 câu, mỗi câu đúng được 1 điểm</td>
                        </tr>

                        <tr>
                            <td>Số điểm tối thiểu cần đạt</td>
                            <td>27</td>
                            <td>Tương đương 90%</td>
                        </tr>
                    </table>
                </div> -->

                <!-- D -->
                <!-- <div class="huong_dan">
                    <h3 class="tieu_de">D. Hướng dẫn</h3>
                    <p>- Ấn chọn câu muốn làm ở thanh bên trái.</p>
                    <p>- Màu xanh 
                        <span><i class="blue ri-square-fill"></i></span>
                        là những câu chưa làm 
                        , Màu vàng <span><i class=" yellow ri-square-fill"></i></span> là những câu đã làm.
                    </p>
                    <p>Nhất nút NỘP BÀI, chọn OK để kết thúc bài thi và chờ hệ thống chấm điểm.</p>
                </div> -->

                <!-- THONG TIN BANG B2 -->
                <h2 class ="cau_truc_heading">THÔNG TIN VÀ CÁCH THỨC THI CÁC TÌNH HUỐNG MÔ PHỎNG</h2>

                <!-- A -->
                <div class="Cau_truc_de_thi">
                    <h3 class="tieu_de">A. Cấu trúc đề thi</h3>
                    <table class="bang_thong_tin"  >
                        <tbody>
                            <th><p>Chương</p></th>
                            <th colspan="2"><p>Nội dung</p></th>
                            <th><p>Thư viện</p></th>
                            <th><p>ĐỀ THI</p></th>

                            <!-- CHƯƠNG 1 -->
                            <tr>
                                <td> 1 </td>
                                <td colspan="2"> Giao thông trên đường phố </td>
                                <td>29TH</td>
                                <td>2 TH</td>
                            </tr>
                           

                            <!-- CHƯƠNG 2 -->
                            <tr>
                                <td>2</td>
                                <td colspan="2">Giao thông trên đường giao thông nông thôn</td>
                                <td>14 TH</td>
                                <td>1 TH</td>
                            </tr>

                            <!-- CHƯƠNG 3 -->
                            <tr>
                                <td>3</td>
                                <td colspan="2">Giao thông trên đường cao tốc</td>
                                <td>20 TH</td>
                                <td>2 TH</td>
                            </tr>

                            <!-- CHƯƠNG 4 -->
                            <tr>
                                <td>4</td>
                                <td colspan="2">Giao thông trên đường núi</td>
                                <td>10 TH</td>
                                <td>1 TH</td>
                            </tr>

                            <!-- CHƯƠNG 5 -->
                            <tr>
                                <td>5</td>
                                <td colspan="2">Giao thông trên đường quốc lộ</td>
                                <td>17 TH</td>
                                <td>2 TH</td>
                            </tr>

                            <!-- CHƯƠNG 6 -->
                            <tr>
                                <td>6</td>
                                <td colspan="2">Các tình huống mô phỏng từ các vụ tai nạn giao thông điển hình đã xảy ra trong thực tế</td>
                                <td>30 TH</td>
                                <td>2 TH</td>
                            </tr>

    

                        </tbody>
                    </table>
                </div>

                <!-- B -->
                <div class="Phuong_phap_cham_diem">
                    <h3 class="tieu_de">B. Phương pháp chấm điểm</h3>
                    <b>Trong mỗi tình huống có 02 mốc thời điểm 5đ và 0đ:</b><br>
                    <p><i class="ri-checkbox-line" id="tick_green"></i><b>5 điểm: </b>thời điểm bắt đầu có dấu hiệu phát hiện ra tình huống nguy hiểm, lái xe cần xử lý</p>
                    <p><i class="ri-checkbox-line" id="tick_red"></i><b>0 điểm: </b>mốc thời điểm mà xử lý từ thời điểm này vẫn xảy ra tai nạn</p>
                    <p><i class="ri-checkbox-line" id="tick_red"></i> Học viên lựa chọn được giữa 2 mốc này sẽ đạt mức điểm tương ứng từ 5-4-3-2-1 điểm.</p>
                </div>

                <!-- C -->
                <div class="c_danh_gia">
                    <h3 class="tieu_de">C. Đánh giá</h3>
                    <table class="bang_thong_tin">
                        <tr>
                            <td>Hạng GPLX</td>
                            <td>Hạng B1, B2, C, D, E, F</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Thang điểm</td>
                            <td>50</td>
                            <td>Đề thi 10 câu, mỗi câu tối đa 5 điểm</td>
                        </tr>
                        <tr>
                            <td>Điểm đạt tối thiếu</td>
                            <td>35</td>
                            <td>Tương đương 70% </td>
                        </tr>
                    </table>
                </div>

                <!-- D -->
                <div class="huong_dan">
                    <h3 class="tieu_de">D. Hướng dẫn</h3>
                    <b id="text_yellow">Bấm phím SPACE (phím cách) hoặc bấm nút GẮN CỜ ở dưới video khi phát hiện tình huống nguy hiểm</b>
                </div>
            </div> 
 
            <div class="Bat_dau">
                <button class="click">
                    <span><i class="yellow ri-play-circle-line"></i></span>
                    <h2>THI THỬ </h2>
                    <p>Thi thử 120 tình huống mô phỏng giao thông online phiên bản 2.0.0</p>
                    <a href="#"><b id="text_yellow" style="font-size: 25px;">Xem tổng quan ôn luyện</b></a>
                </button>
            </div>
        </div>
    <!-- END -->

    <div class="form_luachon">
        <div class="luachon">
            <div class="luachon_heading">
                <h3>THI THỬ LÝ THUYẾT</h3>
                <span><i class="ri-close-large-line"></i></span>
            </div>

            <div class="luachon_content">
                <div class="list_choice">
                        <p>Chọn hạng: </p>
                        <div class="list_choice_item">
                            <label for="">
                                <i class="ri-car-fill"></i>
                                <select name="" id="">
                                    <option value="">Hạng B1</option>
                                    <option value="">Hạng B2</option>
                                </select>
                            </label>
                        </div>
                </div>
                <div class="list_choice">
                <p>Chọn đề thi: </p>
                <div class="list_choice_item">
                <label for="">
                        <span><i class="ri-article-line"></i></span>
                        <select name="" id="de">
                            <option value="1">Đề 1</option>
                            <option value="2">Đề 2</option>
                            <option value="3">Đề 3</option>
                            <option value="4">Đề 4</option>
                            <option value="5">Đề 5</option>
                            <option value="ngauNhien">Đề ngẫu nhiên</option>
                        </select>
                    </label>
                </div>
                </div>
                <button class="thi_btn">THI</button>
            </div>
          
            
        </div>
    </div>

    <script>
        const exit = document.querySelector(".ri-close-large-line");
        const show = document.querySelector(".form_luachon");
        const Click = document.querySelector(".click");
        const form = document.querySelector(".luachon");
        const Thi = document.querySelector(".thi_btn");

        Click.addEventListener("click", () => {
            show.classList.add("form_luachon_open");
        });
        
        exit.addEventListener("click", () => {
            show.classList.remove("form_luachon_open");
        });

        show.addEventListener("click", () => {
            show.classList.remove("form_luachon_open");
        });

        Thi.addEventListener("click", () => {
            var de =document.getElementById("de").value;
            window.location.href = "giaoDienThiMP.php?de="+de+"";
        });

        // giải quyết vấn đề ấn trong form  thì mất form (ngăn chặn việc nổi bọt của form)
        form.addEventListener('click', function(event )
        {
            event.stopPropagation();
        })


    </script>
</body>
</html>