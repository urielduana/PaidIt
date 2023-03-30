<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'stock',
        'Business_id',
        'Item_type_id'
    ];

    public function item_Item_Type()
    {
        return $this->belongsTo(ItemType::class, 'Item_type_id');
    }
    public function item_Business()
    {
        return $this->belongsTo(Business::class, 'Business_id');
    }
    public function item_Order_Item()
    {
        return $this->hasMany(OrderItem::class, 'Item_id');
    }
}
