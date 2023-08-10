<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'Customer_id',
    ];

    public function cart_Customer()
    {
        return $this->belongsTo(Customer::class, 'Customer_id');
    }

    public function cart_CartItem()
    {
        return $this->hasMany(CartItem::class, 'Cart_id');
    }
}