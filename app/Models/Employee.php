<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'salary',
        'User_id',
        'Business_id'
    ];

    public function employee_User()
    {
        return $this->belongsTo(User::class, 'User_id');
    }
    public function employee_Business()
    {
        return $this->belongsTo(Business::class, 'Business_id');
    }
}
