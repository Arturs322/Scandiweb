<?php
require_once "vendor/autoload.php";
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
    <script src="public/typeSwitcher.js"></script>
    <title>Scandiweb</title>
</head>
<body>

<ul>
    <li><a href="" class="title">Product Add</a></li>
    <li class="right">
        <button onclick="window.location='productList';" type="submit" value="Cancel" id="cancel-product-btn">Cancel
        </button>
    </li>
    <li class="right"><input form="product_form" type="submit" value="Save" id="save-product-btn"></li>
</ul>

<?php if (isset($_POST['SKU'])) {

    header("Location: productList");
} ?>
<hr>
<div class="container">
    <form id="product_form" action="" method="POST">
        <?php include "app/backend/Validation.php"; ?>
        <div class="form-group">
            <label for="SKU">SKU</label><br>
            <input type="text" id="SKU" name="SKU" placeholder="GGWP1337" required><br>
        </div>

        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" placeholder="Acme Disc" required><br>
        </div>

        <div class="form-group">
            <label for="price">Price ($)</label><br>
            <input type="number" id="price" name="price" placeholder="228" required><br>
        </div>

        <br>

        <label for="productType">Type switcher</label>
        <select name="productType" id="productType" onchange="myFunction()">
            <option value="">Choose a type</option>
            <option value="DVD">DVD-disc</option>
            <option value="Furniture">Furniture</option>
            <option value="Book">Book</option>
        </select>

        <div id="div1"></div>

    </form>
</div>

<?php include "public/footerScandiweb.html" ?>
</body>

<?php
use Scandiweb\backend\InsertData;
$data = new InsertData();
$data->insertDVD();
$data->insertFurniture();
$data->insertBook();
?>

</html>