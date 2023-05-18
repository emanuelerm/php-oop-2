<?php
include __DIR__ . '/Category.php';
include __DIR__ . '/Type.php';

class Product 
{
    public
    $name, $image, $expire, $category, $type;

    public function __construct(string $name, string $image, mixed $expire, Category $category, Type $type)
    {
        $this->name = $name;
        $this->image = $image;
        $this->expire = $expire;
        $this->category = $category;
        $this->type = $type;
    }
}