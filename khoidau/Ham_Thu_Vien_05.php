<?php
    //1. sử dụng hàm explode để chuyển chuỗi thành mảng
    $str1 = "Hoc Lap Trinh PHP";
    $arr1=explode(" ",$str1);
    var_dump($arr1);
    //2. Sử dụng hàm implode để chuyển mảng thành chuỗi
    $arr2 = implode("|",$arr1);
    echo "<br/>" . $arr2 . "<br/>";
    //3. sử dụng hàm strlen trả về chiều dài của chuỗi 
    $str2 = "COMPUTER";
    echo "<br/>" . strlen($str2) . "<br/>";
    //4. Hàm str_replace Thay thế chuỗi con con bằng chuỗi con mới trong chuỗi gốc
    echo "<br/>" . str_replace("Hoc","Nghien Cuu",$str1) . "<br/>";
    //5. Hàm strpos Tìm vị trí bắt đầu của chuỗi con 
    echo "<br/>" . strpos($str1,"Lap Trinh") . "<br/>";
?>