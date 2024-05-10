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
        echo "<table border='1' align='center'>";
            echo "<tr><td align = 'center'><b>Nơi thi</b></td><td align = 'center'><b>Địa chỉ</b></td><td align = 'center'><b>Số điện thoại</b></td><td align = 'center'><b>Xem thêm</b></td></tr>";
            echo "<tr><td>".$dong['Noi_Thi']."</td><td>".$dia_chi."</td><td>".$dong['SDT']."</td><td><a href='".$url_maps."' target='_blank'>"."Xem địa chỉ"."</a></td></tr>";
        echo "</table>";
    }else{
        echo "Không tìm thấy ";
    }
    
    mysqli_close($conn);
}
}
?>