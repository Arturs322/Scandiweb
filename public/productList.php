<?php
require_once "vendor/autoload.php";
use Scandiweb\backend\MySQLData;
$mySQLData = new MySQLData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/styles.css">
    <link rel="icon" type="image/x-icon"
          href="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco,dpr_1/zutqape4fuqbjdtqikim">
    <title>Scandiweb</title>
</head>
<body>

<ul>
    <li><a href="/productList" class="title">Product List</a></li>
    <li class="right"><input form="list" type="submit" name="delete-product-btn" id="delete-product-btn"
                             value="Delete records"></li>
    <li class="right">
        <button type="submit" onclick="window.location='productAdd';" id="add-product-btn">ADD</button>
    </li>
</ul>

<hr>
<?php
$mySQLData->delete();
$results = $mySQLData->read(); ?>
<div class="flex-container">
    <?php
    while ($row = mysqli_fetch_array($results)) { ?>
        <div class='col-md-3 mt-3'>
            <div class='card text-center bg-light'>
                <div class='card-body'>
                    <form id="list" action="/productList" method="POST">
                        <input style="float:left;" type="checkbox" name="checkbox[]" class="delete-checkbox"
                               value="<?php echo $row['id'] ?>">
                        <br>
                        <h5 class='card-title'> <?php echo $row['SKU']; ?></h5>
                        <h5 class='card-title'><?php echo $row['name']; ?></h5>
                        <p class='card-text'><?php echo $row['price'] . "$"; ?></p>
                        <p><?php if (!empty($row['size'])) {
                                echo "Size: " . $row['size'] . "MB";
                            } else echo ""; ?></p>
                        <p><?php if (!empty($row['weight'])) {
                                echo "Weight: " . $row['weight'] . "KG";
                            } else echo ""; ?></p>
                        <p><?php if (!empty($row['dimensions'])) {
                                echo "Dimension: " . $row['dimensions'];
                            } else echo ""; ?></p>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php include "public/footerScandiweb.html" ?>
</body>
</html>