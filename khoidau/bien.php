<?php
    //Biến trong PHP
    //Biến sẽ bắt đầu bằng ký tự $
    // biến có thể lưu trữ số, chuỗi, logic, đối tượng và mảng
    $n = 5;
    echo $n;
    echo gettype($n);

    $m = 10.10;
    echo $m;
    echo gettype($m);

    $l = true;
    echo $l;
    echo gettype($l);
    //Chú ý về chuỗi => sử dụng cặp ngoặc kép hoặc đơn
    $ho = "Lê Trung";
    $ten = "Thực";
    echo "chào bạn $ho $ten";
    //Nếu sử dụng nháy đơn phải dùng phép toán nối chuỗi 
    echo 'chào bạn lần 2:'. ' '. $ho. ' '. $ten;
    
?>