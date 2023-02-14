<?php
    //Kiểm tra số nguyên có thể dùng hàm is_numeric
    echo is_numeric(5) ? "là số nguyên" : "Không phải là số nguyên";
    echo "<br/>";
    echo is_integer("5") ? "là số nguyên" : "Không phải là số nguyên";
    //Kiểm tra kiểu Bool
    echo "<br/>";
    echo is_bool(true) ? "là kiểu bool" : "Không phải là kiểu bool";
    //Kiểm tra kiểu mảng
    echo "<br/>";
    echo is_array([1,2,3]) ? "là mảng" : "Không phải là kiểu mảng";
?>