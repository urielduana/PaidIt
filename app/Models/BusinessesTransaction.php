<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessesTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mount',
        'business_id',
    ];
    public function businessesTransaction_Business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }





}