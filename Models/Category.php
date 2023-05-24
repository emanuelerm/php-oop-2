<?php

class Category
{
    public 
    $name, $icon;

    public function __construct(string $name, string $icon){
        $this->name = $name;
        $this->icon = $icon;
    }
}