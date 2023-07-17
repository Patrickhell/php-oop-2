<?php
include_once __DIR__ . '/product.php';
class Accessories extends Product
{
    public $name;

    //** la classe accessori essendo figlia di product ,importo il file product con (include) e extendo la classe Accessories a Product (classe parent dato che senza dodotto non esiste la classe Accessories)*/
    function __construct(Category $_category, string $_title, string $_description, string $_image, float $_price, string $_name, Int $supermarketAisle,  Int $shelf)
    {
        parent::__construct($_category, $_title, $_description, $_image, $_price, $supermarketAisle, $shelf);
        $this->name = $_name;
    }
}
