<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mount',
        'customer_id',
    ];
    public function customersTransaction_Customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}