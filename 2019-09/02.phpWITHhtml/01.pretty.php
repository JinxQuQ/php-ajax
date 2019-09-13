<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //引入其他的php页面
    include 'data_fruit_list.php';

    //读取数据
    //$arr = array();
    //$arr[0] = array('href' => 'detail/detail1.php?flag=banana','path' => 'img/banana1.jpg','name' => '香蕉');
    echo '<ul>';
    for($i=0;$i<count($arr);$i++){
      echo '<li>'; 
          echo '<a href="'.$arr[$i]['href'].'">点我看'.$arr[$i]['name'].'</a>';
          echo '<img src="'.$arr[$i]['path'].'" alt="">';
          echo '<span>'.$arr[$i]['name'].'</span>';
      echo '</li>';
    }
    echo '</ul>';


    ?>
</body>
</html>