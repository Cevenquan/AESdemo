<?php
//ajax调用服务端 返回明文数据
header("Content-type: text/html; charset=utf-8"); 
header("Access-Control-Allow-Origin", "*");
echo trim(DesDecrypt($_REQUEST['decrypt']));

function DesDecrypt($decrypt) {

    // 定义变量

    $key_base = "quanGeZhen123456";
    $iv_base = "quanGeZhen123456";

    $key = md5($key_base);
    $iv = $iv_base;
    $decrypt=base64_decode($decrypt);
    return mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $decrypt, MCRYPT_MODE_CBC, $iv);
    

}