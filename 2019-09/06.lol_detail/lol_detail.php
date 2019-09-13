<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        div {
            width: 300px;
            height: 500px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -150px;
            margin-top: -250px;
        }

        img {
            width: 200px;
            height: 200px;
            margin: 10px 50px;
        }

        h2 {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <?php
    //设置中文编码格式
    header('content-type:text/html;charset=utf-8');

    include 'data_lol_detail.php';
    //获取键值对中的键
    $heroName = $_GET['lolHero'];
    //查询数据
    //根据键获取值并赋予$hero
    $hero = $heroArr[$heroName];
    //print_r($hero)
    //生成页面返回给用户
    echo '<div><h2>' . $hero['champion_title'] . '--<span>' . $hero['champion_name'] . '</span></h2>
    <br/>
    <img src="' . $hero['champion_icon'] . '" alt=""><br/>
    <h4>' . $hero['champion_info'] . '</h4>
    <h4>' . $hero['champion_tags'] . '</h4></div>'
    ?>
</body>

</html>