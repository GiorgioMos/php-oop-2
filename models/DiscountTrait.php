<?php
trait DiscountTrait
{
    protected $discount;

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function applyDiscount()
    {
        if (isset($this->discount)) {
            $this->price -= $this->price * ($this->discount / 100);
        }
    }
}
