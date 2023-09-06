<?php

function formatprice($price) {
    return $price/100 ."," .  . " €";
}

echo formatprice(1000);
