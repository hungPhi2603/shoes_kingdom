<?php

namespace App;

class Cart
{
    public $items= null;
    public $totalQty= 0;
    public $totalPrice= 0;

    function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items= $oldCart->items;
            $this->totalQty= $oldCart->totalQty;
            $this->totalPrice= $oldCart->totalPrice;
        }
    }

    function add($item, $id, $size_id) {
        $storedItem= ['qty' => 0, 'price' => $item->promotion_price, 'size_id' => $size_id, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id.'_'.$size_id, $this->items)) {
                $storedItem= $this->items[$id.'_'.$size_id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price']= $item->promotion_price * $storedItem['qty'];
        $this->items[$id.'_'.$size_id]= $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->promotion_price;
    }
}
