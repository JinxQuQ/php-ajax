<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
      img{
        width: 120px;
        height: 120px;
      }
    </style>
</head>
<body>
    <!--读取数据库---引入假数据
    $heroArr =array(
    array(
    "champion_icon"=> "images/1498811286269.jpg",
    "champion_name"=>"凯隐",
    ),
    
    <ul>
      <li><img src="" alt=""><a href="">凯因</a></li>
    </ul>
    -->
    <?php
    include 'data_lol_list.php';

    echo '<ul>';
    for ($i=0; $i < count($heroArr) ; $i++) { 
        echo '<li>';
        echo '<img src="'.$heroArr[$i]['champion_icon'].'" alt="">';
        echo '<a href="">'.$heroArr[$i]['champion_name'].'</a>';
        echo '</li>';
    }
    echo '</ul>';
    ?>
</body>
</html>