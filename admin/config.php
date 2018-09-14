<?php
// HTTP
define('HTTP_SERVER', 'http://www.shop.com/admin/');
define('HTTP_CATALOG', 'http://www.shop.com/');

// HTTPS
define('HTTPS_SERVER', 'http://www.shop.com/admin/');
define('HTTPS_CATALOG', 'http://www.shop.com/');

// DIR
define('DIR_ADMIN',str_replace('\admin','',__DIR__));

define('DIR_APPLICATION', DIR_ADMIN.'/admin/');
define('DIR_SYSTEM', DIR_ADMIN.'/system/');
define('DIR_IMAGE', DIR_ADMIN.'/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', DIR_ADMIN.'/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
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

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
