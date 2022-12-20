<?php
    //Mảng có chỉ số là số nguyên từ 0,1,2,........ có 2 cách khai báo và gán giá trị
    // cách 1
    
    $arry1 = array(); // khởi tạo một mảng rỗng
    $arry1[0] = 5; // gán giá trị cho phần tử thứ 0
    $arry1[1] = "Hello"; // gán giá trị thứ 1
    $arry1[2] = "PHP"; // gán giá tr� 2
    $arry1[3] = 15; // gán giá trị 3
    var_dump($arry1);
    echo "<hr>";
    print_r($arry1);
    echo "<hr>";
    echo "<pre>";
    print_r($arry1);
    echo "</pre>";

    //Cách 2
    $arry3 = []; // khởi tạo một mảng rỗng
    $arry3[] = 5; // gán giá trị cho phần tử thứ 0
    $arry3[] = "Hello"; // gán giá trị thứ 1
    $arry3[] = "PHP"; // gán giá tr� 2
    $arry3[] = 15; // gán giá trị 3
    var_dump($arry3);
    echo "<hr>";
    print_r($arry3);
    echo "<hr>";
    echo "<pre>";
    print_r($arry3);
    echo "</pre>";
    $arry4 = ["css","html","php"];
    print_r($arry4);
?>