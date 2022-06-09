<?php
require_once(__DIR__.'/router.php');

get('/', 'public/productList.php');

get('/productList', 'public/productList.php');
post('/productList', 'public/productList.php');
get('/productAdd', 'public/addProduct.php');
post('/productAdd', 'public/addProduct.php');




