<?php
// Kết nối với database
$conn = mysqli_connect("localhost","root","","olblx");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ yêu cầu AJAX
$input = trim($_GET['q']);

// Truy vấn SQL để lấy gợi ý từ cơ sở dữ liệu
$sql = "SELECT * FROM dstinh WHERE Tinh LIKE '%$input%'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // Hiển thị các gợi ý
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='suggestion'> " .$row['Tinh'] . " </div>";
    }
} else {
    echo "Không tìm thấy kết quả.";
}
mysqli_close($conn);
?>