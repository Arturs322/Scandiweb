<?php
require_once(__DIR__.'/router.php');
$x = new \router();


$x->get('/', 'public/productList.php');
$x->get('/productList', 'public/productList.php');
$x->post('/productList', 'public/productList.php');
$x->get('/productAdd', 'public/addProduct.php');
$x->post('/productAdd', 'public/addProduct.php');
