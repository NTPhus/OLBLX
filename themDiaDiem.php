<?php
    include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm địa điểm thi</title>
    <link rel="stylesheet" href="CSS/tkiem.css">
    <link rel="stylesheet" href="CSS/grid.css">
    <style>
        .them_dia_diem
        {
            display: flex;
        }

        .form_add_diadiem{
            padding: 0p 200px;
            margin-left: 25%;
            font-size: 20px;
            /* width: 500px; */
        }
        .them_heading{
             font-size: 40px;
            text-transform: uppercase;
            font-weight: 600;
            margin: 20px 0;
            font-family: math;
            letter-spacing: 1.5px;
            padding: 10px 0;
        }

        .form_add_diadiem  .add_items{
            
            display: flex;
            padding: 15px 0;
            justify-content: space-between;
        }
        input[type=text]{
            margin-left: -40px;
            width: 400px;
            height: 30px;
            outline: none;
            font-size: 18px;
            
        }

        #suggestion{
            width: 400px;
            margin-top: -5px;
            margin-left: 190px;
            font-size: 18px;
        }

        #btn_add_điaiem{
            margin-left: 40%;
            padding: 15px 45px;
            font-size: 20px;
            margin-top: 30px;
            cursor: pointer;
            font-weight: 600;
        }

        #btn_add_điaiem:hover{
            color:#fff;
            font-weight: 600;
            background: #0099FF;
            border: 1px solid #999999;
            box-shadow: 0px 0px 10px #03e9f4;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
<?php
    include 'header.php';
 ?>

 <div class="them_dia_diem">
        <?php
            include 'sidebar.php';
        ?>
        <form class="form_add_diadiem" action="XuLyPHP/XuLy.php" method="POST">
                <input type="text" name="action" value="themDiaDiem" id="" hidden>
                <p class="them_heading">Thêm địa điểm thi bằng lái</p>
                <div class="add_items">
                    <p>Tỉnh</p>
                    <input type="text" id="tinh" onkeyup="showSuggestions()" name="tinh" >   
                </div>

                     <label id="suggestion"></label>
                <div class="add_items">
                     <p>Tên nơi thi</p>
                     <input type="text" name="noiThi" id="">
                </div>

                <div class="add_items">
                     <p>Địa chỉ</p>
                     <input type="text" name="diaChi" id="">
                </div>

                <div class="add_items">
                    <p>SĐT</p>
                    <input type="text" name="sdt" id="">
                </div>

                <input id="btn_add_điaiem" type="submit" name="" id="" value="Thêm địa điểm">
            </form>
           
    </div>
    <?php include 'footer.php'?>
    


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
document.getElementById("tdd").style.backgroundColor = "#0099FF";
</script>
</body>
</html>