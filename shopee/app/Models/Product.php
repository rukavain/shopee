<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'stocks',
        'image',
        'sold'
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
