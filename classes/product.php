<?php
class Product
{
    public $product_type;
    public $title;
    public $description;
    public $image;
    public $price;


    function __construct(Product_type $_product_type, string $_title, string $_description, string $_image, float $_price)
    {
        $this->product_type = $_product_type;
        $this->title = $_title;
        $this->description = $_description;
        $this->image = $_image;
        $this->price = $_price;
    }

    public function getDescriptionLenght(Int $length)
    {
        return substr($this->description, 0, $length);
    }
}
