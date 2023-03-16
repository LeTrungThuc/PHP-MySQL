<?php
session_start();
if (isset($_SESSION['HoTen']) && isset($_SESSION['Tuoi'])) {
    $hoTen = $_SESSION['HoTen'];
    $Tuoi = $_SESSION['Tuoi'];
    $kq = 'Họ Tên:' . $hoTen . ' ' . 'Tuổi:' . $Tuoi;
} else {
    echo 'Không tồn tại ';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php echo $kq ?>
    </h1>
</body>

</html>