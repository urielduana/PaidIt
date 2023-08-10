<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'Order_id',
        'Item_id',
        'Status_id'
    ];
    function orderItem_Item()
    {
        return $this->belongsTo(Item::class, 'Item_id');
    }
    function orderItem_Order()
    {
        return $this->belongsTo(Order::class, 'Order_id');
    }
    function orderItem_Status()
    {
        return $this->belongsTo(Status::class, 'Status_id');
    }
    
}