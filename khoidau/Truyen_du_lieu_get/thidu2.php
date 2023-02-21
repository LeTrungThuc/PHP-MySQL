<?php
    $ten = isset($_GET["txtten"]) ? $_GET["txtten"] : "";
    $tuoi = isset($_GET["txttuoi"]) ? $_GET["txttuoi"] : "";
    $thongtin = ($ten == "" || $tuoi == "" ) ? "" : "Toi ten là $ten. toi $tuoi tuoi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyền dữ liệu get</title>
</head>
<body>
    <form action="" method="GET">
        Họ Tên: <input type="text" name="txtten" value="<?php echo $ten ?>"> <br />
        Tuổi: <input type="text" name="txttuoi" value="<?php echo $tuoi ?>"> <br />
        <input type="submit" name="btnsubmid" value="Đăng ký">
    </form>
    <h1><?php echo $thongtin ?></h1>
</body>
</html>