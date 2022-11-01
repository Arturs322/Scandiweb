<?php
$error = "Please, provide the data of indicated type.";

if (isset($_POST['price']))
{
    $price = $_POST ["price"];
    if (!preg_match ("/^[0-9]*$/", $price) ){
        echo $error;
    }
}

if (isset($_POST['size']))
{
    $size = $_POST ["size"];
    if (!preg_match ("/^[0-9]*$/", $size) ){
        echo $error;
    }
}

if (isset($_POST['height']))
{
    $height = $_POST ["height"];
    if (!preg_match ("/^[0-9]*$/", $height) ){
        echo $error;
    }
}

if (isset($_POST['width']))
{
    $width = $_POST ["width"];
    if (!preg_match ("/^[0-9]*$/", $width) ){
        echo $error;
    }
}

if (isset($_POST['length']))
{
    $length = $_POST ["length"];
    if (!preg_match ("/^[0-9]*$/", $length) ){
        echo $error;
    }
}

if (isset($_POST['Book']))
{
    $weight = $_POST ["Book"];
    if (!preg_match ("/^[0-9]*$/", $weight) ){
        echo $error;
    }
}