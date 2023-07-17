<?php
include_once __DIR__ . '/category.php';
include_once __DIR__ . '/traits/position.php';
class Product
{
    use Position;
    public $category;
    public $title;
    public $description;
    public $image;
    public $price;


    function __construct(Category $_category, string $_title, string $_description, string $_image, float $_price, Int $supermarketAisle, Int $shelf)
    {
        $this->category = $_category;
        $this->title = $_title;
        $this->description = $_description;
        $this->image = $_image;
        $this->price = $_price;
        $this->supermarketAisle = $supermarketAisle;
        $this->shelf = $shelf;
    }

    public function getDescriptionLenght(Int $length)
    {
        return substr($this->description, 0, $length);
    }
}
