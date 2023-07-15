<?php
class Product_type
{
    public $category;
    public $name;



    function __construct(Category $_category, string $_name)

    {
        $this->category = $_category;
        $this->name = $_name;
    }
}
