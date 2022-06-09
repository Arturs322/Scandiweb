<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

get('/', 'index.php');
get('/list', 'public/test.php');
get('/addProduct', 'public/addProduct.php');


any('/404','views/404.php');
