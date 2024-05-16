<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="CSS/giaoDienTimKiem.css">
    <link rel="stylesheet" href="CSS/grid.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="app">
        <div class="app_Text">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-2 text_item"></div>
                    <a href="#" id="a_item"><i class="ri-arrow-left-double-fill" id="item1"></i></a>
                    <h3 id="textPage">Trang tìm kiếm địa điểm thi</h3>
                </div>
            </div>
        </div>
        <div class="app_content">
        <form action="giaoDienTimKiem.php" method="POST">
            <input type="text" id="search" onkeyup="showSuggestions()" name="search" class="input_Tinh" placeholder="Vui lòng nhập tên tỉnh thành muốn tìm! ..."><br>
            <select name="tinh" id="" class="Tinh_item">
                <option value="" selected>-- Chọn tỉnh/thành phố --</option>
                <option value="An Giang">An Giang</option>
                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                <option value="Bạc Liêu">Bạc Liêu</option>
                <option value="Bắc Kạn">Bắc Kạn</option>
                <option value="Bắc Giang">Bắc Giang</option>
                <option value="Bắc Ninh">Bắc Ninh</option>
                <option value="Bến Tre">Bến Tre</option>
                <option value="Bình Dương">Bình Dương</option>
                <option value="Bình Định">Bình Định</option>
                <option value="Bình Phước">Bình Phước</option>
                <option value="Bình Thuận">Bình Thuận</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Cao Bằng">Cao Bằng</option>
                <option value="Cần Thơ">Cần Thơ</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Đắk Lắk">Đắk Lắk</option>
                <option value="Đắk Nông">Đắk Nông</option>
                <option value="Điện Biên">Điện Biên</option>
                <option value="Đồng Nai">Đồng Nai</option>
                <option value="Đồng Tháp">Đồng Tháp</option>
                <option value="Gia Lai">Gia Lai</option>
                <option value="Hà Giang">Hà Giang</option>
                <option value="Hà Nam">Hà Nam</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Hải Dương">Hải Dương</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="Hậu Giang">Hậu Giang</option>
                <option value="Hòa Bình">Hòa Bình</option>
                <option value="Hưng Yên">Hưng Yên</option>
                <option value="Khánh Hòa">Khánh Hòa</option>
                <option value="Kiên Giang">Kiên Giang</option>
                <option value="Kon Tum">Kon Tum</option>
                <option value="Lai Châu">Lai Châu</option>
                <option value="Lâm Đồng">Lâm Đồng</option>
                <option value="Lạng Sơn">Lạng Sơn</option>
                <option value="Lào Cai">Lào Cai</option>
                <option value="Long An">Long An</option>
                <option value="Nam Định">Nam Định</option>
                <option value="Nghệ An">Nghệ An</option>
                <option value="Ninh Bình">Ninh Bình</option>
                <option value="Ninh Thuận">Ninh Thuận</option>
                <option value="Phú Thọ">Phú Thọ</option>
                <option value="Phú Yên">Phú Yên</option>
                <option value="Quảng Bình">Quảng Bình</option>
                <option value="Quảng Nam">Quảng Nam</option>
                <option value="Quảng Ngãi">Quảng Ngãi</option>
                <option value="Quảng Ninh">Quảng Ninh</option>
                <option value="Quảng Trị">Quảng Trị</option>
                <option value="Sóc Trăng">Sóc Trăng</option>
                <option value="Sơn La">Sơn La</option>
                <option value="Tây Ninh">Tây Ninh</option>
                <option value="Thái Bình">Thái Bình</option>
                <option value="Thái Nguyên">Thái Nguyên</option>
                <option value="Thanh Hóa">Thanh Hóa</option>
                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                <option value="Tiền Giang">Tiền Giang</option>
                <option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
                <option value="Trà Vinh">Trà Vinh</option>
                <option value="Tuyên Quang">Tuyên Quang</option>
                <option value="Vĩnh Long">Vĩnh Long</option>
                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                <option value="Yên Bái">Yên Bái</option>
            </select>
            <div><input type="submit" value="Tìm kiếm" class="submit"></div>
            <div id="suggestion"></div>
        </form>             
    </div>
    <section class="app_result">
    <?php
        if(isset($_POST['search']) || isset($_POST['tinh'])){
        $search_tinh = isset($_POST['search']) ? trim($_POST['search']) : '';
        $select_tinh = isset($_POST['tinh']) ? trim($_POST['tinh']) : '';
        if (!empty($search_tinh) || !empty($select_tinh)) {
            $conn = mysqli_connect("localhost", "root", "", "olblx");
            
            // Tạo câu truy vấn SQL cơ bản
            $sql = "SELECT * FROM dstinh WHERE 1 = 1";
            
            // Thêm điều kiện tìm kiếm theo từ khóa 'search_tinh'
            if(!empty($search_tinh)){
                $sql .= " AND Tinh LIKE '%$search_tinh%' ";
            }
            // Thêm điều kiện tìm kiếm theo tỉnh đã chọn
            if(!empty($select_tinh)){
                $sql .= " AND Tinh = '$select_tinh' ";
            }
            $kq = mysqli_query($conn,$sql);
            if($dong = mysqli_fetch_array($kq)){
                $dia_chi = $dong['Dia_Chi'];
                $url_maps = "https://www.google.com/maps/search/?api=1&query=" . urlencode($dia_chi); // urlencode mã hóa địa chỉ
                echo "<table border= '1' align='center' class='table_ketqua'>";
                    echo "<tr class='dong'><td align = 'center'><b>Nơi thi</b></td><td align = 'center'><b>Địa chỉ</b></td><td align = 'center'><b>Số điện thoại</b></td><td align = 'center'><b>Xem địa chỉ trên GG Map</b></td></tr>";
                    echo "<tr class='dong'><td>".$dong['Noi_Thi']."</td><td>".$dia_chi."</td><td>".$dong['SDT']."</td><td><a href='".$url_maps."' target='_blank' id='xemdiachi'>"."Xem địa chỉ"."</a></td></tr>";
                echo "</table>";
            }else{
                echo "Không tìm thấy ";
            }
            
            mysqli_close($conn);
        }
        }
?>
</section>
    <?php include 'footer.php' ?>
    </div>
    
    <script>
    function showSuggestions() {
    var input = document.getElementById('search').value;
    if (input === '') {
        document.getElementById('suggestion').style.display = 'none';
        return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('suggestion').innerHTML = this.responseText;
            document.getElementById('suggestion').style.display = 'block';
          

            // Add click event listener to suggestions
            var suggestions = document.getElementsByClassName('suggestion');
            for (var i = 0; i < suggestions.length; i++) {
                suggestions[i].addEventListener('click', function() {
                    var value = event.target.textContent; // Lấy nội dung của gợi ý được chọn
                    document.getElementById('search').value = value; // Cập nhật giá trị của ô văn bản
                    document.getElementById('suggestion').style.display = 'none'; // Ẩn phần gợi ý
                });
            }
        }
    };
    xmlhttp.open('GET', 'xulytimkiem.php?q=' + input, true);
    xmlhttp.send();
}

</script>
</body>
</html>