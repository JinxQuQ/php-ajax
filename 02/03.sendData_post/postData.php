<?php
    // 设置中文编码
     header('content-type:text/html;charset=utf-8');

    //接收GET
     print_r ($_POST);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>没想到你竟然喜欢吃<?php echo $_POST['food'] ?></h2>
    <h2>还用<?php echo $_POST['cook'] ?>来吃</h2>
</body>
</html>
