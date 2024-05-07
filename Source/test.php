<?php

function TaoRandomTheoChuong($arr, $scau){
    if($scau <= 0) return [];
    $kq = array_rand($arr, $scau);
    return $kq;
}

function LayChuong($chuong){
    $data = [];
    $conn = mysqli_connect("localhost", "root", "", "olblx");
    if($chuong == 1)
        $sql = "SELECT cau FROM `chuong1`";
    else if($chuong == 2)
        $sql = "SELECT cau FROM `chuong2`";
    else if($chuong == 3)
        $sql = "SELECT cau FROM `chuong3`";
    else if($chuong == 4)
        $sql = "SELECT cau FROM `chuong4`";
    else if($chuong == 5)
        $sql = "SELECT cau FROM `chuong5`";
    else if($chuong == 6)
        $sql = "SELECT cau FROM `chuong6`";
    else if($chuong == 7)
        $sql = "SELECT cau FROM `chuong7`";
    else if($chuong == 8)
        $sql = "SELECT cau FROM `60_cau_diem_liet`";
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

// $conn = mysqli_connect("localhost", "root", "", "olblx");
// $sql = "SELECT * FROM `600_cau_hoi`";
// $res = mysqli_query($conn, $sql);

$data = TaoDe(8, 0, 1, 1, 1, 9, 9, 1);

print_r($data);
// while($row = mysqli_fetch_array($res)){
//     array_push($data,$row['cauhoi']);
//     array_push($data,$row['img']);
//     array_push($data,$row['dapan1']);
//     array_push($data,$row['dapan2']);
//     array_push($data,$row['dapan3']);
//     array_push($data,$row['dapan4']);
//     array_push($data,$row['dapandung']);
// }

?>