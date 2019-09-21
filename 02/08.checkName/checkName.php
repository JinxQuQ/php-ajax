<?php
$name=$_GET['name'];
$nameArr=array('jax','niko','jinx','ahri');
$result=in_array($name,$nameArr);
if($result==true){
    echo '该用户名已被占用';
}else{
    echo '恭喜！该用户名可用';
}
?>