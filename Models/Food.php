<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Weight.php';

class Food extends Product
{   
    use Weight;
    public
     $type, $expire, $taste;

    public function __construct(string $name, float $price, string $image, string $brand, Category $category, string $type, string $expire, string $taste, $weight, $unit){
        parent::__construct($name, $price, $image, $brand, $category);

        $this->type = $type;
        $this->expire = $expire;
        $this->taste = $taste;
        try {
            $this->setWeight($weight, $unit);
        } catch (Exception $e) {
           echo 'Errore: '.$e->getMessage();
        }
    }
}