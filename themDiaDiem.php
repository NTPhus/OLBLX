<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm địa điểm thi</title>
    <link rel="stylesheet" href="CSS/tkiem.css">
    <link rel="stylesheet" href="CSS/grid.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <form action="XuLyPHP/XuLy.php" method="POST">
        <input type="text" name="action" value="themDiaDiem" id="">
        <p>Thêm địa điểm thi bằng lái</p>
        <p>Tỉnh <input type="text" id="tinh" onkeyup="showSuggestions()" name="tinh" ></p>
        <div id="suggestion"></div>
        <p>Tên nơi thi <input type="text" name="noiThi" id=""></p>
        <p>Địa chỉ <input type="text" name="diaChi" id=""></p>
        <p>SĐT <input type="number" name="sdt" id=""></p>
        <input type="submit" name="" id="" value="Thêm địa điểm">
    </form>


    <script>
    function showSuggestions() {
    var input = document.getElementById('tinh').value;
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
                    document.getElementById('tinh').value = value; // Cập nhật giá trị của ô văn bản
                    document.getElementById('suggestion').style.display = 'none'; // Ẩn phần gợi ý
                });
            }
        }
    };
    xmlhttp.open('GET', 'XuLyPHP/XuLy.php?action=timkiem&q=' + input, true);
    xmlhttp.send();
}

</script>
</body>
</html>