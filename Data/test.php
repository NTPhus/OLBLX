<?php
    function read_docx_file($filename){
        if (!file_exists($filename)) {
            return false;
        }
    
        $zip = new ZipArchive;
        if ($zip->open($filename) === TRUE) {
            $content = '';
            // Assuming the text content is in the 'word/document.xml' file
            if (($index = $zip->locateName('word/document.xml')) !== false) {
                $content = $zip->getFromIndex($index);
            }
            $zip->close();
            // Remove XML tags and return plain text
            return strip_tags($content);
        } else {
            return false;
        }
    }
    
    //data video mô phỏng

    // $filename = "ĐAVideo.docx";
    // $content = read_docx_file($filename);

    // $pos = strpos($content, '|');
    // $ind = 0;

    // $data = [];

    // while($pos){
    //     $time = substr($content, $ind, $pos - $ind);
    //     $ind = $pos+1;
    //     $pos = strpos($content, '|', $ind);

    //     foreach(explode(":",$time) as $x){
    //         array_push($data, $x);
    //     }  
    // }

     //create connection
    // try{
    //     $conn = mysqli_connect("localhost", "root", "", "olblx");
    // }catch(mysqli_sql_exception){
    //     echo "Could not connected";
    // }

    // for($i = 0; $i < sizeof($data); $i = $i+4){
    //     $sql = "INSERT INTO `video_mo_phong`(`cau`, `start`, `end`, `dodaivideo`) VALUES ('".$data[$i]."','".$data[$i+1]."','".$data[$i+2]."','".$data[$i+3]."')";
    //     mysqli_query($conn, $sql);
    // }

    // mysqli_close($conn);

    //Ghi data vào 600 câu

    // $filename = "De_On_GPLX_Oto.docx";
    // $content = read_docx_file($filename);
    
    // $count = 0;
    // $soCau = 2;
    // $cau = "Câu ".$soCau;
    // $pos = strpos($content, $cau);
    // $ind = 0;

    // while($pos){
    //     $cauHoi[$count] = substr($content, $ind, $pos-$ind);
    //     $ind = $pos;
    //     $count = $count + 1;
    //     $soCau = $soCau + 1;
    //     $cau = "Câu ".$soCau;
    //     $pos = strpos($content, $cau);
    // }
    // $cauHoi[$count] = substr($content, $ind, 300);

    // //create connection
    // try{
    //     $conn = mysqli_connect("localhost", "root", "", "olblx");
    // }catch(mysqli_sql_exception){
    //     echo "Could not connected";
    // }

    // $count = 1;
    // foreach($cauHoi as $sentence ){
    //     echo $sentence."<br>";
    //     $hoi = substr($sentence, strpos($sentence, "/")+1, strpos($sentence, "?")-strpos($sentence, "/"));
    //     $ind = strpos($sentence, "?")+1;
    //     $dapan1 = "";
    //     $dapan2 = "";
    //     $dapan3 = "";
    //     $dapan4 = "";
    //     if($ind < strlen($sentence)){
    //         $dapan1 = substr($sentence, $ind, strpos($sentence, ".", $ind) - $ind + 1);
    //         $ind = strpos($sentence, ".", $ind+1)+1;
    //     }
    //     if($ind < strlen($sentence)){
    //         $dapan2 = substr($sentence, $ind, strpos($sentence, ".", $ind) - $ind + 1);
    //         $ind = strpos($sentence, ".", $ind+1)+1;
    //     }
    //     if($ind < strlen($sentence)){
    //         $dapan3 = substr($sentence, $ind, strpos($sentence, ".", $ind) - $ind + 1);
    //         $ind = strpos($sentence, ".", $ind+1)+1;
    //     }
    //     if($ind < strlen($sentence)){
    //         $dapan4 = substr($sentence, $ind, strpos($sentence, ".", $ind) - $ind + 1);
    //         $ind = strpos($sentence, ".", $ind+1)+1;
    //     }

    //     if($count < 167)
    //         $sql = "insert into 600_cau_hoi(chuong, cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('1','".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
    //     else if($count < 193)
    //         $sql = "insert into 600_cau_hoi(chuong, cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('2','".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
    //     else if($count < 214)
    //         $sql = "insert into 600_cau_hoi(chuong, cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('3','".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
    //     else if($count < 270)
    //         $sql = "insert into 600_cau_hoi(chuong, cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('4','".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
    //     else if($count < 305)
    //         $sql = "insert into 600_cau_hoi(chuong, cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('5','".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
    //     else if($count < 487)
    //         $sql = "insert into 600_cau_hoi(chuong, cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('6','".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
    //     else
    //         $sql = "insert into 600_cau_hoi(chuong, cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('7','".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
        
    //         $count = $count + 1;
    //     mysqli_query($conn, $sql);
    // }

    // $filename = "DA-GPLX-Oto.docx";
    // $content = read_docx_file($filename);

    // $count = 0;
    // $pos = strpos($content, ":");

    // while($count < 600){
    //     $da[$count] = substr($content, $pos + 1, 1);
    //     $pos = strpos($content, ":", $pos + 1);
    //     $count = $count + 1;
    // }

    // $cau = 1;
    // foreach($da as $dapan){
    //     $sql = "update 600_cau_hoi set dapandung = '".$dapan."' where cau = '".$cau."'";
    //     $cau = $cau + 1;
    //     echo $sql."<br>";
    //     mysqli_query($conn, $sql);
    // }

    // $filename = "Cau_co_anh_GPLX_Oto.docx";
    // $content = read_docx_file($filename);

    // $count = 0;
    // $pos = strpos($content, ": ");

    // while($count < 600){
    //     $da[$count] = substr($content, $pos + 2, 1);
    //     $pos = strpos($content, ":", $pos + 1);
    //     $count = $count + 1;
    // }

    // $cau = 1;
    // foreach($da as $dapan){
    //     if($dapan == 0)
    //         $sql = "update 600_cau_hoi set img = '0' where cau = '".$cau."'";
    //     else
    //         $sql = "update 600_cau_hoi set img = '".$cau."' where cau = '".$cau."'";
    //     $cau = $cau + 1;
    //     echo $sql."<br>";
    //     mysqli_query($conn, $sql);
    // }

    // mysqli_close($conn);

    $filename = "CauDiemLiet.docx";
    $content = read_docx_file($filename);
     //create connection
    try{
        $conn = mysqli_connect("localhost", "root", "", "olblx");
    }catch(mysqli_sql_exception){
        echo "Could not connected";
    }

    foreach(explode('-', $content) as $cau){
        $sql = "UPDATE 600_cau_hoi set cau_diem_liet = '1' where cau = $cau";
        mysqli_query($conn, $sql);
    }

    mysqli_close($conn);

?>