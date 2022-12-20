<?php
    //Phép toán số học
    $n = 10;
    $m = 5;
    $kq1 = $n + $m;
    echo "phép Cộng: $kq1"; 
    $kq2 = $n * $m;
    echo "phép Nhân: $kq2";
    $kq3 = $n - $m;
    echo "phép trừ: $kq3";
    $kq4 = $m / $n;
    echo "phép chia: $kq4";
    $kq5 = $n % $m;
    echo "phép chia lấy dư: $kq5";

    //Phép toán so sánh
    $s ="10";
    echo $n===$m;
    echo $s===$n;
    //Phép toán kết hợp
    echo ++$n;
    //Phép toán 3 ngôi
    $gt = $n>$m ? $n>$m : ($n == $m ? $n = $m : $n<$m);
    echo $gt;   
?>