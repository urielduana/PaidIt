<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'balance',
        'guardian_name',
        'guardian_phone',
        'User_id',
    ];
    protected $hidden = [
        'nfc_auth',
    ];

    public function customer_User()
    {
        return $this->belongsTo(User::class, 'User_id');
    }
    public function customer_Order()
    {
        return $this->hasMany(Order::class, 'Customer_id');
    }
}
