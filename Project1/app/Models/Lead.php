<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'user_id'
    ];

    // Define the relationship with the User model (inverse of the one defined in User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
