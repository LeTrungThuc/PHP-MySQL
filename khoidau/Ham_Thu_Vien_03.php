<?php
    //Sử dụng isset để kiểm tra sự tồn tại của biến và giá trị null?
    //1.Nếu biến ko tồn tại
    var_dump(isset($a));
    echo "<br/>";
    //2.Nếu biến tồn tại mà có giá trị là null
    $b;
    var_dump(isset($b));
    echo "<br/>";
    //3.Nếu biến tồn tại mà có giá trị là khác null
    $c=0;
    var_dump(isset($c));
    echo "<br/>";
    //4.Nếu biến tồn tại mà có giá trị là rỗng khác nu;;
    $d="";
    var_dump(isset($d));
    echo "<br/>";
    //Sủ dụng empty để kiểm tra một biến có chứa giá trị rỗng hay không ? Các trường hợp được xem là chuỗi rỗng:
    //Chuỗi rỗng ""
    var_dump(empty(""));
    echo "<br/>";
    //Chuỗi rỗng "0"
    var_dump(empty("0"));
    echo "<br/>";
    //Chuỗi rỗng giá trị null
    var_dump(empty(null));
    echo "<br/>";
    //Chuỗi rỗng ""
    var_dump(empty(false));
    echo "<br/>";
?>