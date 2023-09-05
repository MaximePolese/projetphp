<?php

//$name = 'Deuter trail 30';
//$price = 145;
//$picture = 'https://dk0fkjygbn9vu.cloudfront.net/cache-buster-11693445103/deuter/mediaroom/product-images/backpacks/hiking-backpacks/159244/image-thumb__159244__deuter_lightbox-img/3440723-3253-Trail30_wave_ivy-D-00.png';

$description = "La surface de contact réduite et les grands canaux d’aération du système dorsal Airstripes de deuter, combinés aux bretelles et aux stabilisateurs de hanche perforés (avec poches), assurent un flux d’air maximal et une répartition uniforme du poids pour un maintien parfait et sécurisé sur tous les terrains. La construction plate du rabat offre un bon dégagement pour la tête, même avec un casque. Les boucles sur les bretelles permettent de garder les mousquetons de via ferrata à portée de main. Et grâce à une grande ouverture frontale zippée et à des poches latérales, les équipements et le matériel sont toujours faciles d’accès.";

$Sacs = [
    "name" => "Deuter trail 30",
    "price" => 145,
    "weight" => 1120,
    "discount" => 10,
    "picture_url" => "https://dk0fkjygbn9vu.cloudfront.net/cache-buster-11693445103/deuter/mediaroom/product-images/backpacks/hiking-backpacks/159244/image-thumb__159244__deuter_lightbox-img/3440723-3253-Trail30_wave_ivy-D-00.png"
];

include 'header.php';

?>

<section class="container">
    <article class="product d-flex flex-row p-2">
        <h2 class="nomDuProduit"><?php echo $Sacs["name"] ?></h2>
        <p class="productDescription">Description : <?php echo $description ?></p>
        <img class="productPic" src="<?php echo $Sacs["picture_url"] ?>" alt="">
        <p>Prix : <?php echo $Sacs["price"] ?> €</p>
    </article>
</section>

<?php include 'footer.php'; ?>


