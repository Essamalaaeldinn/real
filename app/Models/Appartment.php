<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartment extends Model
{
    protected $fillable = [
        
        'home_type',
        'phone',  
        'home_space', 
        'floor', 
        'home_price', 
        'num_of_bathrooms', 
        'num_of_bedrooms', 
        'location',
        'user_id', // Assuming you have a user_id column to associate with the user who owns the appartment
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}