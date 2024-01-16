<?php
class Food extends Product
{
    protected $flavor;

    public function __construct($image, $title, $price, $category, $flavor, $discount)
    {
        parent::__construct($image, $title, $price, $category, '', $discount);
        $this->flavor = $flavor;
    }

    public function getFlavor()
    {
        return $this->flavor;
    }
}
