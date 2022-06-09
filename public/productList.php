<?php
require_once "vendor/autoload.php";
use Scandiweb\backend\MySQLData;
$mySQLData = new MySQLData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/styles.css">
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco,dpr_1/zutqape4fuqbjdtqikim">
    <title>Scandiweb</title>
</head>
<body>

<ul>
    <li><a href="/productList" class="title">Product List</a></li>
    <li class="right"><input form="list" type="submit" name="delete-product-btn" id="delete-product-btn" value="MASS DELETE"></li>
    <li class="right"><button type="submit" onclick="window.location='productAdd';" id="add-product-btn">ADD</button></li>
</ul>

<hr>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <tr>
        <th>Delete</th>
        <th>SKU</th>
        <th>Name</th>
        <th>Price</th>
        <th>Size</th>
        <th>Weight</th>
        <th>Dimensions</th>

    </tr>

    <?php
    $mySQLData->deleteData();
    $results = $mySQLData->showData();
    while ($row = mysqli_fetch_array($results)) { ?>
    <form id="list" action="/productList" method="POST">

        <tr>
            <td><input type="checkbox" name="checkbox[]" class="delete-checkbox" value="<?php echo $row['id'] ?>"></td>
            <td><?php echo $row['SKU']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price'] . "$"; ?></td>
            <td><?php if (!empty($row['size']))
                {
                    echo $row['size'] . "MB";
                } else echo "-"; ?></td>
            <td><?php if (!empty($row['weight']))
                {
                    echo $row['weight'] . "KG";
                } else echo "-"; ?></td>
            <td><?php if (!empty($row['dimensions']))
                {
                    echo $row['dimensions'];
                } else echo "-"; ?></td>
        </tr>
        <?php } ?>
    </form>

    <?php include "public/footerScandiweb.html" ?>
</body>
</html>
