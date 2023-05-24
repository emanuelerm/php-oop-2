<?php
include_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public
     $type;

    public function __construct(string $name, float $price, string $image, string $brand, Category $category, string $type){
        parent::__construct($name, $price, $image, $brand, $category);

        $this->type = $type;
    }
}