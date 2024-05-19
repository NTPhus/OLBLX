<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="CSS/tkiem.css">
    <link rel="stylesheet" href="CSS/grid.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <?php include 'header.php' ?>
    <section class="ok">
    <div class="app">
        <div class="app_Text">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-4 text_item"></div>
                    <h3 id="textPage">Trang tìm kiếm địa điểm thi</h3>
                </div>
            </div>
        </div>
        <div class="app_content">
        <form action="giaoDienTimKiem.php" method="POST">
            <div class="search-container">
            <div><input type="text" id="search" onkeyup="showSuggestions()" name="search" class="input_Tinh" placeholder="Vui lòng nhập tên tỉnh thành muốn tìm! ..."><button type="submit" class="submit">Tìm kiếm<i class="ri-search-line"></i></button></div>
            </div>
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
</section>
<?php include 'footer.php' ?>
</body>
</html>