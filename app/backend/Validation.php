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
    $price = $_POST ["size"];
    if (!preg_match ("/^[0-9]*$/", $price) ){
        echo $error;
    }
}

if (isset($_POST['height']))
{
    $price = $_POST ["height"];
    if (!preg_match ("/^[0-9]*$/", $price) ){
        echo $error;
    }
}

if (isset($_POST['width']))
{
    $price = $_POST ["width"];
    if (!preg_match ("/^[0-9]*$/", $price) ){
        echo $error;
    }
}

if (isset($_POST['length']))
{
    $price = $_POST ["length"];
    if (!preg_match ("/^[0-9]*$/", $price) ){
        echo $error;
    }
}

if (isset($_POST['Book']))
{
    $price = $_POST ["Book"];
    if (!preg_match ("/^[0-9]*$/", $price) ){
        echo $error;
    }
}