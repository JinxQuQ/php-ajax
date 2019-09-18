<?php
    print_r($_FILES);
    //输出内容
    /*
      Array ( [icon] => Array ( 
        [name] => 200657210799.png 
        [type] => image/png 
        [tmp_name] => C:\Users\JINX\AppData\Local\Temp\php6275.tmp 
        [error] => 0 
        [size] => 31694 ) )
    */
    //move_uploaded_file(参数1,参数2)
    //参数1:移动的文件
    //参数2:要移动到哪里去
    move_uploaded_file($_FILES['icon']['tmp_name'],'files/'.$_FILES['icon']['name']);
?>
