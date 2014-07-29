<?php

date_default_timezone_set('US/Eastern');
iconv_set_encoding('internal_encoding', 'UTF-8');
setlocale(LC_ALL, 'ru_RU.UTF-8');

$parameters = array(
    'db' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => 'root',
        'dbname'      => 'phalcony-module',
        'options'	  => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_PERSISTENT => true
        )
    )
);

return include_once 'core.php';