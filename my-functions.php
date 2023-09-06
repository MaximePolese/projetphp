<?php

function formatPrice(float $price): string
{
    return number_format($price / 100, 2, ",", " ") . ' €';
}

//echo formatPrice(1000);

function priceExcludingVAT(float $price, float $vat)
{
    return (100 * $price) / (100 + $vat);
}

echo formatPrice(priceExcludingVAT(1000, 20));


//function discountedPrice()