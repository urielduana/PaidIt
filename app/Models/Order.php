<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'status',
        'description',
        'Customer_id',
    ];

    public function order_Customer()
    {
        return $this->belongsTo(Customer::class, 'Customer_id');
    }

    public function order_Order_Item()
    {
        return $this->hasMany(OrderItem::class, 'Order_id');
    }
}
