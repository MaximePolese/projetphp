<?php

$name = 'Deuter trail 30';
$price = 145;
$picture = 'https://dk0fkjygbn9vu.cloudfront.net/cache-buster-11693445103/deuter/mediaroom/product-images/backpacks/hiking-backpacks/159244/image-thumb__159244__deuter_lightbox-img/3440723-3253-Trail30_wave_ivy-D-00.png';
$description = "La surface de contact réduite et les grands canaux d’aération du système dorsal Airstripes de deuter, combinés aux bretelles et aux stabilisateurs de hanche perforés (avec poches), assurent un flux d’air maximal et une répartition uniforme du poids pour un maintien parfait et sécurisé sur tous les terrains. La construction plate du rabat offre un bon dégagement pour la tête, même avec un casque. Les boucles sur les bretelles permettent de garder les mousquetons de via ferrata à portée de main. Et grâce à une grande ouverture frontale zippée et à des poches latérales, les équipements et le matériel sont toujours faciles d’accès.";

include 'header.php';

?>

    <section class="container">
    <article class="product">
        <h2 class="nomDuProduit"><?php echo $name ?></h2>
        <p>Description : <?php echo $description?></p>
        <img src="<?php echo $picture ?>" alt="">
        <p>Prix : <?php echo $price?> €</p>
    </article>
    </section>

<?php include 'footer.php'; ?>