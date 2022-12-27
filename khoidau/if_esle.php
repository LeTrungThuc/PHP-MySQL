<?php
    //Câu lệnh if else
    $tuoi =18;
    if($tuoi<18){
        echo "Bạn chưa đủ 18 tuổi";
    }
    else{
        echo "Bạn đã đủ 18 tuổi";
    }
    $diem =10;
    if($diem<=10){
        if($diem<4){
            echo "Học lại";
        }
        elseif($diem >= 4 && $diem< 5.5){
            echo "Loại D";
        }
        elseif($diem >= 5.5 && $diem< 7){
            echo "Loại C";
        }
        elseif($diem >= 7 && $diem< 8.5){
            echo "Loại B";
        }
        elseif($diem >= 8.5 && $diem<=10){
            echo "Loại A";
        }
    }
    else{
        echo "Nhập từ 1-10 nhé !";
    }
?>