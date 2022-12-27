<?php
    //Câu lệnh for foreach
    for($i = 0;$i <= 10;$i++){
        echo "đếm số: $i <br/>";
    }
    $data=["Tin học","Tiếng Anh","Kinh Tế"];
    foreach($data as $key => $value){
        $key =$key +1;
        echo "tại vị trí môn thứ $key: $value <br/>";
        echo "Có môn học: $value <br/>";
    }
    for ($i = 0; $i <= 10; $i++) {
        for ($j = $i; $j <= 10; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>