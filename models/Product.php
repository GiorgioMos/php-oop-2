<?php
require_once __DIR__ . '/category.php';
require_once __DIR__ . '/DiscountTrait.php';

class Product
{
    use DiscountTrait;

    public $image;
    public $title;
    public $price;
    public $category;
    public $description;

    public function __construct($image, $title, $price, $category, $description, $discount)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->discount = $discount;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
