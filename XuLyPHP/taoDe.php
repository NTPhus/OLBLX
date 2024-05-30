<?php
      function TaoRandomTheoChuong($arr, $scau){
        if($scau <= 0) return [];
        $kq = array_rand($arr, $scau);
        return $kq;
    }
    
    function LayChuong($chuong){
        $data = [];
        $conn = mysqli_connect("localhost", "root", "", "olblx");
        if($chuong == 8)
            $sql = "SELECT cau FROM `600_cau_hoi` WHERE cau_diem_liet = '1'";
        else
            $sql = "SELECT cau FROM `600_cau_hoi` WHERE chuong = '$chuong'";
        $res = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($res)){
            $data[$row['cau']] = $row['cau'];
        }
        return $data;
    }
    
    function CombineChuong($arr, $chuong, $scau){
        $c1 = LayChuong($chuong);
        $array = TaoRandomTheoChuong($c1, $scau);
        if(is_array($array) || is_object($array))
        foreach($array as $a){
            array_push($arr, $a);
        }else{
            array_push($arr, $array);
        }
        return $arr;
    }
    
    function TaoDe($sc1, $sc2, $sc3, $sc4, $sc5, $sc6, $sc7, $sc8){
       $sum = $sc1 + $sc2 + $sc3 + $sc4 + $sc5 + $sc6 + $sc7 + $sc8;
       $data = [];
       $data = CombineChuong($data, 1, $sc1);
       $data = CombineChuong($data, 2, $sc2);
       $data = CombineChuong($data, 3, $sc3);
       $data = CombineChuong($data, 4, $sc4);
       $data = CombineChuong($data, 5, $sc5);
       $data = CombineChuong($data, 6, $sc6);
       $data = CombineChuong($data, 7, $sc7);
       $data = CombineChuong($data, 8, $sc8);
    
       array_unique($data);
       while(sizeof($data) != $sum){
            TaoDe($sc1, $sc2, $sc3, $sc4, $sc5, $sc6, $sc7, $sc8);
       }
       return $data;
    }
?>