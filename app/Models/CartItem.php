<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'Cart_id',
        'Item_id'
    ];
    function cartItem_Item()
    {
        return $this->belongsTo(Item::class, 'Item_id');
    }
    function cartItem_Cart()
    {
        return $this->belongsTo(Cart::class, 'Cart_id');
    }
}