<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>静态网站</title>
  <style type="text/css">
    html,
    body,
    div,
    ul,
    img {
      padding: 0;
      margin: 0;
    }

    header {
      background: lightgreen;
      height: 50px;
      text-align: center;
      line-height: 50px;
      font: bold 24px/50px Arial;
    }

    nav {
      background: lightblue;
      height: 30px;
      line-height: 30px;
      padding-left: 180px;
    }

    section {
      background: lightyellow;
      min-height: 600px;
    }

    footer {
      background: lightgray;
      height: 50px;
      text-align: center;
      line-height: 50px;
    }

    #container {
      width: 1010px;
      height: auto;
      margin: auto;
      background: #E2F9AA;
      padding-bottom: 10px;
    }

    ul li {
      list-style: none;
      width: 190px;
      height: 200px;
      float: left;
      background: lightyellow;
      margin-left: 10px;
      margin-top: 10px;
    }

    ul li img {
      width: 190px;
      height: 170px;
      display: block;
      cursor: pointer;
    }

    ul li div {
      background: #7DBD50;
      width: 185px;
      height: 30px;
      line-height: 30px;
      padding-left: 5px;
    }

    a {
      text-decoration: none;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>蔬菜水果网上超市</header>
  <nav>
    <a href="#">水果</a>
    <a href="#">蔬菜</a>
    <a href="#">干果</a>
  </nav>
  <section>
    <div id="container">
      <ul>
        <!--<li>
            <a href="#">
              <img src="img/banana1.jpg">
              <div>香蕉</div>
            </a>
          </li>

          <li><a href="#"><img src="img/banana1.jpg"><div>香蕉</div> </a></li>
          $arr = array();
          $arr[0] = array('href' => 'detail/detail1.php?flag=banana','path' => 'img/banana1.jpg','name' => '香蕉');
         生成 html结构 -->
        
       <?php
       include 'data_fruit_list.php';

       for ($i=0; $i <count($arr) ; $i++) { 
           echo '<li><a href="'.$arr[$i]['href'].'"><img src="'.$arr[$i]['path'].'"><div>'.$arr[$i]['name'].'</div> </a></li>';
       }
       ?>
       

      </ul>
      <div style="clear: both;"></div>
    </div>
  </section>
  <footer>版权所有</footer>
</body>

</html>