<?php

ini_set('display_errors', 1);

define('DSN','mysql:host=localhost;dbname=kakeibo');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD', 'pass');

define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();