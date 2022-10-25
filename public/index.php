<?php
 require_once './vendor/autoload.php';
 require_once './routes/route.php';
 $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
 
 include './app/view/template/header.php';
 router($url);
 include './app/view/template/footer.php';