<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'price',
        'total',
        'status',
        'Order_id',
        'Item_id'
    ];
    function orderItem_Item()
    {
        return $this->hasOne(Item::class, 'id', 'Item_id');
    }
    function orderItem_Order()
    {
        return $this->belongsTo(Order::class, 'Order_id');
    }
}
