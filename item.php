<?php
include 'my-functions.php';
$description = "La surface de contact réduite et les grands canaux d’aération du système dorsal Airstripes de deuter, combinés aux bretelles et aux stabilisateurs de hanche perforés (avec poches), assurent un flux d’air maximal et une répartition uniforme du poids pour un maintien parfait et sécurisé sur tous les terrains. La construction plate du rabat offre un bon dégagement pour la tête, même avec un casque. Les boucles sur les bretelles permettent de garder les mousquetons de via ferrata à portée de main. Et grâce à une grande ouverture frontale zippée et à des poches latérales, les équipements et le matériel sont toujours faciles d’accès.";
include 'simple-catalog.php';
//include 'catalog-with-keys.php';
include 'multidimensional-catalog.php';
include 'header.php';

?>

<section class="container">
    <h1 class=" d-flex justify-content-center border border-warning  border-3 py-2 mt-2"><?php echo $products[0] ?></h1>
</section>

<?php foreach ($sacs as $sac) { ?>

    <section class="container">
        <article class="product d-flex justify-content-around border border-warning  border-3 my-2">
            <h2 class="productName p-2"><?php echo $sac["name"] ?></h2>
            <p class="productDescription p-2">Description : <?php echo $description ?></p>
            <img class="productPic align-self-center p-2" src="<?php echo $sac["picture_url"] ?>" alt="">
            <div class="d-flex flex-column justify-content-end">
                <p>Poids : <?php echo $sac["weight"] ?> gr</p>
                <p>Prix HT : <?php echo formatPrice(priceExcludingVAT($sac["price"], $sac["vat"])); ?></p>
                <p>Prix TTC : <?php echo formatPrice($sac["price"]); ?></p>
                <p>Remise : <?php echo $sac["discount"] ?> %</p>
                <p>Prix remisé : <?php echo formatPrice(discountedPrice($sac["price"], $sac["discount"])); ?></p>
            </div>
        </article>
    </section>

<?php } ?>

<?php include 'footer.php'; ?>


