<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrederItem extends Model
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
}
