<?php
//Thiết lập biến cookie
if (isset($_COOKIE['uresName'])) {
    echo $_COOKIE['uresName'];
} else {
    echo 'Không tồn tại';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thi du cookie</title>
</head>

<body>
    <h1>Thí dụ cookie</h1>
</body>

</html>