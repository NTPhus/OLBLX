<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/trangchu.css">
    <link rel="stylesheet" href="CSS/grid.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>

      <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>
<?php include 'header.php'?>

<div class="container">
       <!-- START - LUA CHON  -->
       <div class="topic">
        <div class="topic_content">
            <h2>BÀI ÔN TẬP & LUYỆN THI</h2>
                <div class="topic_content_item">
                    <div class="row">
                        <!-- 1 -->
                        <div class="col l-4  topic_content_item">
                            <div class="topic_content_heading">
                                <span><i class="ri-steering-2-line"></i></span>
                                <p>ÔN TẬP 120 TÌNH HUỐNG MÔ PHỎNG</p>
                            </div>
                            <div class="topic_content_items">
                                <label for="">
                                    <p>Số câu hỏi</p>
                                    <p>120</p>
                                </label>

                                <label for="">
                                    <p>Phiên bản</p>
                                    <p>v2.0.0</p>
                                </label>
                                <div class="content_body">
                                    <p>ÔN TẬP TRONG 2 GIỜ</p>
                                    <button onclick="ChuyenTrang('OnTapMoPhong')">ÔN TẬP</button>
                              </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="col l-4  topic_content_item">
                            <div class="topic_content_heading">
                                <span><i class="ri-car-fill"></i></span>
                                <p>THI THỬ TÌNH HUỐNG MÔ PHỎNG</p>
                            </div>
                            <div class="topic_content_items">
                                <label for="">
                                    <p>Số câu / đề</p>
                                    <p>120</p>
                                </label>

                                <label for="">
                                    <p>Điểm cần đạt</p>
                                    <p>35 đ</p>
                                </label>

                                <div class="content_body">
                                    <p>LÀM BÀI KHOẢNG 5 PHÚT</p>
                                    <button onclick="ChuyenTrang('ThiMoPhong')">THI THỬ</button>
                              </div>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="col l-4  topic_content_item">
                            <div class="topic_content_heading">
                                <span><i class="ri-todo-line"></i></span>
                                <p>ÔN TẬP 600 CÂU HỎI LÝ THUYẾT</p>
                            </div>
                            <div class="topic_content_items">
                                <label for="">
                                    <p>Số câu hỏi</p>
                                    <p>600</p>
                                </label>

                                <label for="">
                                    <p>Hạng</p>
                                    <p>B, C, D, E</p>
                                </label>
                                <div class="content_body">
                                    <p>ÔN TẬP TRONG 5 GIỜ</p>
                                    <button onclick="chuyenTrang('OnLyThuyet')">ÔN TẬP</button>
                              </div>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="col l-4  topic_content_item">
                            <div class="topic_content_heading">
                                <span><i class="ri-route-line"></i></span>
                                <p>THI THỬ LÝ THUYẾT LÁI XE B1, B2</p>
                            </div>
                            <div class="topic_content_items">
                                <label for="">
                                    <p>Số câu / đề</p>
                                    <p>20, 35</p>
                                </label>

                                <label for="">
                                    <p>Số điểm cần đạt</p>
                                    <p>27/30, 32/35 đ</p>
                                </label>
                                <div class="content_body">
                                    <p>THI THỬ TRONG 22 - 24 PHÚT</p>
                                    <button onclick="ChuyenTrang('ThiLyThuyet')">ÔN TẬP</button>
                              </div>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="col l-4  topic_content_item">
                            <div class="topic_content_heading">
                                <span><i class="ri-file-add-line"></i></span>
                                <p>NHIỀU BỘ ĐỀ KHÁC SẮP RA MẮT</p>
                            </div>
                            <div class="topic_content_items">
                                <label for="">  </label>
                                <label for=""></label>

                            </div>
                        </div>
                            
                    </div>
                </div>
        </div>
    </div>
    <!-- END - LUA CHON -->

    <section class="testimonials">
        <div class="content">
            <div class="section-header">
                <h2 class = "title"> Đánh giá từ học viên</h2>
            </div>

            <div class="testimonials-content">
                <div class="swiper testimonials-slider js-testimonials-slider">
                    <div class = "swiper-wrapper">
                        <!-- ĐÁNH GIÁ 1 -->
                        <div class="swiper-slide testimonials-item">
                            <div class="info">
                                <img src="https://gamek.mediacdn.vn/133514250583805952/2022/5/18/photo-1-16528608926331302726659.jpg" alt="">
                                <div class="text-box">
                                    <h3 class = "name">Nguyễn Diệu Linh</h3>
                                    <span class = "job">Sinh Viên</span>
                                </div>
                            </div>
                            <p>Điều khiến tôi băn khoăn nhất là vừa đi làm và vừa đến trung tâm học lý
                                thuyết, đường đến trung tâm thì xa nhà tôi. Thật may bạn tôi đã giới thiệu
                                trang web này rất tiền lợi để học mà không cần cài đặt phần mềm trên máy
                                tính hay điện thoại.</p>
                            <div class="rating">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                        </div>
                         <!-- ĐÁNH GIÁ 2 -->
                        <div class="swiper-slide testimonials-item">
                            <div class="info">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1ipn79bbt2v9BqrSz2J2uGj7rjNckfki-Nbtn52G4og&s" alt="">
                                <div class="text-box">
                                    <h3 class = "name">Nguyễn Diệu Linh</h3>
                                    <span class = "job">Sinh Viên</span>
                                </div>
                            </div>
                            <p>Gần đây nghe mấy anh chị đi thi lái xe về nói có rất nhiều người rớt phần thi
                                mô phỏng lắm vì nó mới. Nhưng sau khi lên mạng tìm hiểu và tìm được trang
                                web này thì tôi thấy nó khá dễ học với tôi. Vì các tình huống đã được hướng
                                dẫn điểm canh chi tiết và rất dễ nhớ.</p>
                            <div class="rating">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                        </div>
                         <!-- ĐÁNH GIÁ 3 -->
                        <div class="swiper-slide testimonials-item">
                            <div class="info">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBqlqgaPk4UNxBl3nvWC_o1blnoVkKp4_W1I4NgCnlEQ&s" alt="">
                                <div class="text-box">
                                    <h3 class = "name">Nguyễn Diệu Linh</h3>
                                    <span class = "job">Sinh Viên</span>
                                </div>
                            </div>
                            <p>Tôi đang dùng một chiếc máy tính có cấu hình thấp vì vậy không thể cài đặt
                                được phần mềm 120 tình huống mô phỏng. Xem qua rất nhiều trang web có phần
                                mô phỏng này trên web nhưng rất khó sử dụng. Vô tình lướt facebook thì có
                                bạn chia sẻ trang web này, phần mềm mô phỏng online này rất giống với
                                offline, hình rảnh rõ nét, gợi ý điểm canh rất chuẩn. Cho 5 sao!</p>
                            <div class="rating">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                        </div>
                         <!-- ĐÁNH GIÁ 4 -->
                        <div class="swiper-slide testimonials-item">
                            <div class="info">
                                <img src="https://thicc-af.mywaifulist.moe/waifus/325/3d0b1ed821450f828b4590fa290b90ed2d32ff508c8a1ce9cdd0ff730a9c9b39_thumb.jpeg" alt="">
                                <div class="text-box">
                                    <h3 class = "name">Nguyễn Diệu Linh</h3>
                                    <span class = "job">Sinh Viên</span>
                                </div>
                            </div>
                            <p>Đã thử tài vài phần mềm mô phỏng cho điện thoại nhưng xem hình ảnh khá nhỏ,
                                không rõ, khó học. Tôi được bạn giới thiệu web này. Thật tuyệt bài học được
                                sắp xếp rất bài bản, hình ảnh, chất lượng video tương đối rõ nét. Đặt biệt
                                có tình năng làm bài trên video full màn hình.</p>
                            <div class="rating">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination js-testimonials-pagination"></div>

            </div>
        </div>
    </section>


    <div class="grid danh_gia">
        <div class="row no-gutters">
            <div class="col l-2 number_list-item "></div>
            <div class="col l-2 number_list-item ">
                <div class="list-items">
                    <h3 class="numbers_list-values">30 000+</h3>
                    <p class="numbers_desc white">Học viên đã tham gia ôn luyện</p>
                    <p class="gach_chan"></p>
                </div>
            </div>
            <div class="col l-2 number_list-item ">
                <div class="list-items">
                    <h3 class="numbers_list-values">100</h3>
                    <p class="numbers_desc white">Giờ học</p>
                    <p class="gach_chan"></p>
                </div>
            </div>
            <div class="col l-2 number_list-item">
                <div class="list-items">
                    <h3 class="numbers_list-values">5 000+</h3>
                    <p class="numbers_desc white">Lượt truy cập mỗi ngày</p>
                    <p class="gach_chan"></p>
                </div>
            </div>
            <div class="col l-2 number_list-item ">
                <div class="list-items">
                    <h3 class="numbers_list-values">10 000+</h3>
                    <p class="numbers_desc white">Lượt đánh giá tốt</p>
                    <p class="gach_chan"></p>
                </div>
            </div>

        </div>
    </div>

    <!-- FQA -->

    <div class="faq">
    <div class="accordion">
        <h2 class ="faq_heading">CÂU HỎI THƯỜNG GẶP VỀ HỌC LÁI XE Ô TÔ</h2>

        <div class="accordion-content">
            <div class="accordion-item">
                <i class="ri-add-fill"></i>
                <span class ="title"><h3>Thi bằng lái xe B2 đạt bao nhiêu điểm thì đậu?</h3></span>
            </div>
            <p class="answer">
                - Thi lý thuyết có 35 câu trong 600 câu của bộ câu hỏi lý thuyết, học viên đạt 32/35 câu là đủ điểm đạt. <br>
                - Thi mô phỏng có 10 tình huống trong 120 tình huống mô phỏng, với mỗi tình huống tối đa 5 điểm, học viên phải đạt tối thiểu 35/50 điểm. <br>
                - Thực hành có 10 bài thi và tương ứng với 100 điểm, nếu bạn đạt 80/100 điểm là đủ điểm đạt.
            </p>
        </div>

        <div class="accordion-content">
            <div class="accordion-item">
                <i class="ri-add-fill"></i>
                <span class ="title"><h3>Sau bao lâu thì có giấy phép lái xe?</h3></span>
            </div>
            <p class="answer">
                Sau khi thi sát hạch 15 - 20, bạn sẽ được cấp giấy phép lái xe. Bằng lái xe ô tô hạng B2 do Sở GTVT của tỉnh cấp và kèm theo hồ sơ gốc.
        </div>


        <div class="accordion-content">
            <div class="accordion-item">
                <i class="ri-add-fill"></i>
                <span class ="title"><h3>Bằng lái xe B2 có thời hạn bao lâu? </h3></span>
            </div>
            <p class="answer">
                Bằng lái xe ô tô hạng B2 có thời hạn 10 năm kể từ ngày cấp. Bạn cần chú ý
                thời hạn này để đổi bằng đúng hạn bằng cách mang hồ sơ gốc, đơn xin cấp lại giấy phép lái xe,
                giấy khám sức khỏe đến Sở GTVT để được cấp bằng lái xe B2 mới. Nếu quá thời hạn từ 3 tháng đến
                dưới 1 năm, kể từ ngày hết hạn thì phải sát hạch lại lý thuyết để cấp lại giấy phép lái xe. Quá
                hạn từ 1 năm trở lên, kể từ ngày hết hạn, phải sát hạch lại cả lý thuyết và thực hành để cấp lại
                giấy phép lái xe.
            </p>
        </div>

    </div>

</div>

</div>
<script>
    function ChuyenTrang(trang){
        if(trang == "OnTapMoPhong"){
            window.location.href = "giaoDienMoPhong.php";
        }else if(trang == "ThiMoPhong"){
            window.location.href = "giaoDienThiMP.php";
        }else if(trang == "OnLyThuyet"){
            window.location.href = "giaoDienTracNghiem.php";
        }else if(trang == "ThiLyThuyet"){
            window.location.href = "chonDeLyThuyet.php";
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="JS/trangchu.js"></script>


<?php include 'footer.php' ?>
</body>
</html>