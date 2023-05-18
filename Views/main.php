<?php

include __DIR__ . '/../Database/db.php';

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
                        <h3><?= $product->name ?></h3>
                        <p>Expire date: <?= $product->expire ?></p>
                        <h4><i class="<?= $product->category->name ?>"></i></h4>
                        <h5><?= $product->type->name ?></h5>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>