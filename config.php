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

//email
return array(
    'username'  =>  '1805793040@qq.com',
    'password'  =>  'wqpcodarqyzxeghf',
    'port'      =>  465,
    'address'   =>  '1805793040@qq.com',
    'name'      =>  '发件人',
    'title'     =>  '忘记密码'
);
//define('username','1805793040@qq.com');
//define('password','wqpcodarqyzxeghf');
//define('port',465);
//define('address','1805793040@qq.com');
//define('name','发件人');