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
    
    $filename = "De_On_GPLX_Oto.docx";
    $content = read_docx_file($filename);
    
    $count = 0;
    $soCau = 2;
    $cau = "Câu ".$soCau;
    $pos = strpos($content, $cau);
    $ind = 0;

    while($pos){
        $cauHoi[$count] = substr($content, $ind, $pos-$ind);
        $ind = $pos;
        $count = $count + 1;
        $soCau = $soCau + 1;
        $cau = "Câu ".$soCau;
        $pos = strpos($content, $cau);
    }
    $cauHoi[$count] = substr($content, $ind, 300);

    //create connection
    try{
        $conn = mysqli_connect("localhost", "root", "", "olblx");
    }catch(mysqli_sql_exception){
        echo "Could not connected";
    }

    $count = 1;
    foreach($cauHoi as $sentence ){
        echo $sentence."<br>";
        $hoi = substr($sentence, strpos($sentence, "/")+1, strpos($sentence, "?")-strpos($sentence, "/"));
        $ind = strpos($sentence, "?")+1;
        $dapan1 = "";
        $dapan2 = "";
        $dapan3 = "";
        $dapan4 = "";
        if($ind < strlen($sentence)){
            $dapan1 = substr($sentence, $ind, strpos($sentence, ".", $ind) - $ind + 1);
            $ind = strpos($sentence, ".", $ind+1)+1;
        }
        if($ind < strlen($sentence)){
            $dapan2 = substr($sentence, $ind, strpos($sentence, ".", $ind) - $ind + 1);
            $ind = strpos($sentence, ".", $ind+1)+1;
        }
        if($ind < strlen($sentence)){
            $dapan3 = substr($sentence, $ind, strpos($sentence, ".", $ind) - $ind + 1);
            $ind = strpos($sentence, ".", $ind+1)+1;
        }
        if($ind < strlen($sentence)){
            $dapan4 = substr($sentence, $ind, strpos($sentence, ".", $ind) - $ind + 1);
            $ind = strpos($sentence, ".", $ind+1)+1;
        }
        if($count < 167)
            $sql = "insert into chuong1(cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
        else if($count < 193)
            $sql = "insert into chuong2(cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
        else if($count < 214)
            $sql = "insert into chuong3(cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
        else if($count < 270)
            $sql = "insert into chuong4(cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
        else if($count < 305)
            $sql = "insert into chuong5(cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
        else if($count < 487)
            $sql = "insert into chuong6(cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
        else
            $sql = "insert into chuong7(cau, cauhoi, dapan1, dapan2, dapan3, dapan4) values ('".$count."','".$hoi."' , '".$dapan1."', '".$dapan2."', '".$dapan3."', '".$dapan4."')";
        $count = $count + 1;
        mysqli_query($conn, $sql);
    }

    $filename = "DA-GPLX-Oto.docx";
    $content = read_docx_file($filename);

    $count = 0;
    $pos = strpos($content, ":");

    while($count < 600){
        $da[$count] = substr($content, $pos + 1, 1);
        $pos = strpos($content, ":", $pos + 1);
        $count = $count + 1;
    }

    $cau = 1;
    foreach($da as $dapan){
        if($cau < 167)
            $sql = "update chuong1 set dapandung = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 193)
            $sql = "update chuong2 set dapandung = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 214)
            $sql = "update chuong3 set dapandung = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 270)
            $sql = "update chuong4 set dapandung = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 305)
            $sql = "update chuong5 set dapandung = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 487)
            $sql = "update chuong6 set dapandung = '".$dapan."' where cau = '".$cau."'";
        else
            $sql = "update chuong7 set dapandung = '".$dapan."' where cau = '".$cau."'";
        $cau = $cau + 1;
        echo $sql."<br>";
        mysqli_query($conn, $sql);
    }

    $filename = "Cau_co_anh_GPLX_Oto.docx";
    $content = read_docx_file($filename);

    $count = 0;
    $pos = strpos($content, ": ");

    while($count < 600){
        $da[$count] = substr($content, $pos + 2, 1);
        $pos = strpos($content, ":", $pos + 1);
        $count = $count + 1;
    }

    $cau = 1;
    foreach($da as $dapan){
        if($cau < 167)
            $sql = "update chuong1 set img = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 193)
            $sql = "update chuong2 set img = '".$dapan."' where cau = '".$cau."'";  
        else if($cau < 214)
            $sql = "update chuong3 set img = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 270)
            $sql = "update chuong4 set img = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 305)
            $sql = "update chuong5 set img = '".$dapan."' where cau = '".$cau."'";
        else if($cau < 487)
            $sql = "update chuong6 set img = '".$dapan."' where cau = '".$cau."'";
        else
            $sql = "update chuong7 set img = '".$dapan."' where cau = '".$cau."'";
        $cau = $cau + 1;
        echo $sql."<br>";
        mysqli_query($conn, $sql);
    }

    mysqli_close($conn);
?>