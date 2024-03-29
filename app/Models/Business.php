<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
    protected $hidden = [
        'balance',
    ];

    public function business_Employee()
    {
        return $this->hasMany(Employee::class, 'Business_id');
    }

    public function business_Item()
    {
        return $this->hasMany(Item::class, 'Business_id');
    }
}
