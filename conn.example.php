<?php
require __DIR__ . '/vendor/autoload.php';

define('DB_SERVER', 'localhost');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');

$db2 = new MysqliDb (
    DB_SERVER,
    DB_USERNAME,
    DB_PASSWORD,
    DB_DATABASE);
