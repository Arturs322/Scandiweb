<?php
require_once "vendor/autoload.php";
use Scandiweb\backend\MySQLData;
$MySQLData = new MySQLData();
//general information
$SKU = $_POST['SKU'];
$name = $_POST['name'];
$price = $_POST['price'];
//DVD
$DVD = $_POST['size'];
//furniture
$height = $_POST['height'];
$width = $_POST['width'];
$length = $_POST['length'];
$dimension = $height . "x" . $width . "x" . $length;
//book
$weight = $_POST['Book'];
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

<script>
    function myFunction() {
        let x = document.getElementById("productType").value;
        switch (x) {
            case 'DVD':
                document.getElementById("div1").innerHTML = "\n" +
                    "                    <label for=\"size\">Size (MB)</label><br>\n" +
                    "                    <input type=\"number\" id=\"size\" name=\"size\" placeholder=\"50\" required><br>\n" +
                    "                    <p>\n" +
                    "                        Please, provide size of the DVD-Disc.\n" +
                    "                    </p>\n";
                break;
            case 'Furniture':
                document.getElementById("div1").innerHTML = "\n" +
                    "                    <label for=\"height\">Height (CM)</label><br>\n" +
                    "                            <input type=\"number\" id=\"height\" name=\"height\" placeholder=\"Height\" required><br>\n\n" +
                    "                    <label for=\"width\">Width (CM)</label><br>\n" +
                    "                            <input type=\"number\" id=\"width\" name=\"width\" placeholder=\"Width\" required><br>\n\n" +
                    "                    <label for=\"length\">Length (CM)</label><br>\n" +
                    "                            <input type=\"number\" id=\"length\" name=\"length\" placeholder=\"Length\" required><br>\n\n" +
                    "                    <p>\n" +
                    "                        Please, provide dimensions in (Height, Width, Length) format.\n" +
                    "                    </p>\n";
                break;

            case 'Book':
                document.getElementById("div1").innerHTML = "\n" +
                    "                    <label for=\"Book\">Weight (KG)</label><br>\n" +
                    "                    <input type=\"number\" id=\"Book\" name=\"Book\" placeholder=\"5\" required><br>\n" +
                    "                    <p>\n" +
                    "                        Please, provide weight of the book.\n" +
                    "                    </p>\n";
                break;
        }
    }


</script>
</body>

<?php

if (isset($_POST["size"])) {
    $MySQLData->insertDataDVD($SKU, $name, $price, $DVD);
}
if (isset($_POST["height"], $_POST["width"], $_POST["length"])) {
    $MySQLData->insertDataFur($SKU, $name, $price, $dimension);
}
if (isset($_POST["Book"])) {
    $MySQLData->insertDatabook($SKU, $name, $price, $weight);
}

?>

</html>

