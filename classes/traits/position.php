<?php
trait Position
{
    public $supermarketAisle;
    public $shelf;

    public function  getPosition(): string
    {
        return " $this->supermarketAisle, $this->shelf ";
    }
}
