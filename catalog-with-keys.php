<?php

$Sacs = [
    "name" => "Deuter trail 30",
    "price" => 145,
    "weight" => 1120,
    "discount" => 10,
    "picture_url" => "https://dk0fkjygbn9vu.cloudfront.net/cache-buster-11693445103/deuter/mediaroom/product-images/backpacks/hiking-backpacks/159244/image-thumb__159244__deuter_lightbox-img/3440723-3253-Trail30_wave_ivy-D-00.png"
];

print_r($Sacs);
echo "<br>";
echo "<br>";

echo $Sacs["name"] . "<br>";
echo $Sacs["price"] . "<br>";
echo $Sacs["weight"] . "<br>";
echo $Sacs["discount"] . "<br>";
echo $Sacs["picture_url"] . "<br>";
