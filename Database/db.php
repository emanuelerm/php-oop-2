<?php

include __DIR__ . '/../Models/Product.php';

$products = 
[
    $product1 = new Product('cuccia bijoux', 'https://www.tradeshopitalia.com/134563-large_default/cuccia-per-gatti-universale-a-meta-chiuso-con-morbido-cuscino-interno-tgm.jpg', '/', new Category('fa-solid fa-cat'), new Type('cucce')),
    $product2 = new Product('cuccia fufi', 'https://www.duepuntootto.com/454-large_default/henri-cuccia-cotone.jpg', '/', new Category('fa-solid fa-dog'), new Type('cucce')),
    $product3 = new Product('croccette junior', 'https://static.zoomalia.com/prod_img/41733/lm_153b3e3e393c77e35a4a3f3cbd1e429b5dc1521128734.jpg', '2025', new Category('fa-solid fa-dog'), new Type('cibo')),
    $product4 = new Product('mouse', 'https://i.ebayimg.com/images/g/djAAAOSw245jZh~0/s-l500.png', '/', new Category('fa-solid fa-cat'), new Type('giochi')),
    $product5 = new Product('deer bone', 'https://static.zoomalia.com/prod_img/34858/la_98ed3d2c21991e3bef5e069713af9fa6ca1617356340.jpg', '2030', new Category('fa-solid fa-dog'), new Type('giochi')),
];