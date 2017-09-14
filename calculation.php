<?php

$desc_value = $_POST['description'];
$price_value = $_POST['price'];
$discount_value = $_POST['discount'];

$new_dis_price = $price_value - ($price_value * $discount_value * .01);

$list_price_formatted = "$".number_format($price_value,2);
$discount_value_formatted = $discount_value."%";
$new_dis_price_formatted = "$".number_format($new_dis_price,2);

?>
<html>
    <head>
        <title>Product Discount</title>
        <link href="calculation.css" rel="stylesheet">
    </head>

    <body>
       <div class="content">
        <h1>Product Discount Price</h1>
        <table>
            
            <tr>
                <td size="40">Product Description : </td>
                <td><?php echo $desc_value; ?></td>
            </tr>
            <tr>
                <td size="40">List Price : </td>
                <td><?php echo $list_price_formatted; ?></td>
            </tr>
            <tr>
                <td size="40">Discount Percent : </td>
                <td><?php echo $discount_value_formatted; ?></td>
            </tr>
            <tr>
                <td size="40">Discount Price : </td>
                <td><?php echo $new_dis_price_formatted; ?></td>
            </tr>

        </table>

        </div>

    </body>
</html>
