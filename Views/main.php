<?php

include_once __DIR__ . '/../Database/db.php';

?>
<main>
    <div class="container">
        <h1>Aniimal Shop</h1>
        <div class="row">
            <?php foreach($products as $product) : ?>
            <div class="col-3">
                <div class="card">
                     <div class="card-img">
                        <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
                    </div>
                    <div class="card-body">
                        <h1><?= $product->category->name ?></h1>
                        <h3><?= $product->name ?></h3>
                        <p><i class="<?= $product->category->icon ?>"></i></p>
                        <?php  if(is_a($product, 'Toy')) { ?>
                        <p><strong>Tipo: </strong><?= $product->type ?></p>
                        <?php } ?>
                        <?php  if(is_a($product, 'Food')) { ?>
                        <p><strong>Ingredienti: </strong><?= $product->taste ?></p>
                        <?php } ?>
                        <?php  if(property_exists($product, 'weight')) { ?>
                        <h5>Prezzo: <?php echo $product->getWeight() ?></h5>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>