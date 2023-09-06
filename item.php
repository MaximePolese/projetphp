<?php
//include 'catalog-with-keys.php';

//$name = 'Deuter trail 30';
//$price = 145;
//$picture = 'https://dk0fkjygbn9vu.cloudfront.net/cache-buster-11693445103/deuter/mediaroom/product-images/backpacks/hiking-backpacks/159244/image-thumb__159244__deuter_lightbox-img/3440723-3253-Trail30_wave_ivy-D-00.png';
$description = "La surface de contact réduite et les grands canaux d’aération du système dorsal Airstripes de deuter, combinés aux bretelles et aux stabilisateurs de hanche perforés (avec poches), assurent un flux d’air maximal et une répartition uniforme du poids pour un maintien parfait et sécurisé sur tous les terrains. La construction plate du rabat offre un bon dégagement pour la tête, même avec un casque. Les boucles sur les bretelles permettent de garder les mousquetons de via ferrata à portée de main. Et grâce à une grande ouverture frontale zippée et à des poches latérales, les équipements et le matériel sont toujours faciles d’accès.";

include 'multidimensional-catalog.php';

include 'header.php';

?>

<?php foreach ($Sacs as $Sac) { ?>

    <section class="container">
        <article class="product d-flex flex-row">
            <h2 class="nomDuProduit p-2"><?php echo $Sac["name"] ?></h2>
            <p class="productDescription p-2">Description : <?php echo $description ?></p>
            <img class="productPic p-2" src="<?php echo $Sac["picture_url"] ?>" alt="">
            <div class="d-flex flex-column">
                <p>Poids : <?php echo $Sac["weight"] ?> gr</p>
                <p>Prix : <?php echo $Sac["price"] ?> €</p>
                <p>Remise : <?php echo $Sac["discount"] ?> %</p>
            </div>
        </article>
    </section>

<?php } ?>

<?php include 'footer.php'; ?>


