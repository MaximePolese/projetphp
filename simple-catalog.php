<?php

$products = ["Sacs", "Tentes", "Matelas", "Sacs de couchage", "Bâtons"];

print_r($products);

echo sort($products);
foreach ($products as $val) {
    echo $val . " ";
}

echo $products[0];
echo $products[4];


