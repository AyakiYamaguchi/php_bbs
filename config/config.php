<?php
  ini_set('display_errors',1);

  define('DSN','mysql:dbname=db_bbs;host=127.0.0.1;port=8889;charset=utf8');
  define('DB_USERNAME','test');
  define('DB_PASSWORD','KB3Z73sMsf4UUTIS');


  define('SITE_URL', 'http://localhost:8888' . '/php_bbs/public_html');

  require_once(__DIR__ .'/../lib/Controller/functions.php');
  require_once(__DIR__ . '/autoload.php');
  session_start();
