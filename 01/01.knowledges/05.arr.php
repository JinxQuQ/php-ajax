<style>
  span{
      color : pink;
      font-size : 100px;
  }
</style>
<?php
  //设置中文代码
  header('content-type:text/html;charset=utf-8');

  //二维数组
  $starArr=array(
      array('name'=>'刘德华','film'=>'无间道','friend'=>'曾志伟'),
      array('name'=>'吴京','film'=>'战狼','friend'=>'张翰'),
      array('name'=>'黄渤','film'=>'疯狂的石头','friend'=>'林志玲'),
      array('name'=>'汪峰','film'=>'春天里','friend'=>'那英')
  ); 

  //echo $starArr[2]['film']
  for ($i=0; $i < count($starArr); $i++) { 
      echo '<h2>姓名：<span>'.$starArr[$i]['name'].'</span>，出演了：'.$starArr[$i]['film'].'，好朋友是：'.$starArr[$i]['friend'].'<br><h2>';
  }
?>