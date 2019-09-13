<?php
error_reporting(0);
//设置中文代码
header('content-type:text/html;charset=utf-8');
//索引数组
$npc = array('adc'=>'jinx','sup'=>'nicho','top'=>'jax','jud'=>'qing','mid'=>'ahri');

//获取内容
echo $npc[adc];
echo '<br>';

//输出整个数组
print_r($npc);
echo '<br>';
echo count($npc);
echo '<br>';

//遍历输出整个数组
//$key 循环的键 
//$value 循环的值
foreach ($npc as $key => $value) {
    echo $key.'===>'.$value.'<br>';
}
?>