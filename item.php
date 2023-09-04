<?php

$name = 'Deuter trail 30';
$price = 100;
$picture = 'https://dk0fkjygbn9vu.cloudfront.net/cache-buster-11693445103/deuter/mediaroom/product-images/backpacks/hiking-backpacks/159244/image-thumb__159244__deuter_lightbox-img/3440723-3253-Trail30_wave_ivy-D-00.png';

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<header>

</header>
<main>
    <article class="product">
        <h2 class="nomDuProduit"><?php echo $name ?></h2>
        <p>Description du produit</p>
        <img src="<?php echo $picture ?>" alt="">
        <p>Prix : <?php echo $price?> €</p>
    </article>
</main>
<footer>

</footer>
</body>
</html>
