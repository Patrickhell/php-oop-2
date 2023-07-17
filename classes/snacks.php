<?php
include_once __DIR__ . '/product.php';

class Snacks extends Product
{
    public $name;

    function __construct(Category $_category, string $_title, string $_description, string $_image, float $_price, $_name, Int $supermarketAisle,  Int $shelf)
    {
        parent::__construct($_category, $_title, $_description, $_image, $_price, $supermarketAisle, $shelf);
        $this->name = $_name;
    }
}
