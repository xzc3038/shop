<?php
// HTTP
define('HTTP_SERVER', 'http://www.shop.com/');

// HTTPS
define('HTTPS_SERVER', 'http://www.shop.com/');

// DIR
define('DIR_APPLICATION', 'D:/work/shop/catalog/');
define('DIR_SYSTEM', 'D:/work/shop/system/');
define('DIR_IMAGE', 'D:/work/shop/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'shop');
define('DB_PORT', '3306');
define('DB_PREFIX', '');


return array(
    //email
    'username'  =>  '1805793040@qq.com',
    'password'  =>  'wqpcodarqyzxeghf',
    'port'      =>  465,
    'address'   =>  '1805793040@qq.com',//邮箱地址
    'name'      =>  '发件人',//发件人名称
    'title'     =>  '忘记密码',//邮件标题

    'length'    =>  6,//验证码长度
    //0为大小写英文和数字,1为数字,2为小写字母,3为大写字母,4为大小写字母,5为大写字母和数字,6为小写字母和数字
    'mode'      =>  0,
    'link'      =>  'http://www.shop.com/index.php?route=account/forgotten/resetpwd',//链接地址
    'time'      =>  300, //验证码过期时间

    //每页显示“其他人也在看”的条数
    'limit_view'  => 15,

    //每页显示“销量最高”的条数
    'limit_best'  => 10,
);