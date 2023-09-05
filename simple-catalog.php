<?php

$products = ["Sacs", "Tentes", "Matelas", "Sacs de couchage", "Bâtons"];

echo sort($products);
foreach ($products as $val) {
    echo $val." ";
}

echo $products[0];
echo $products[4];

?>

