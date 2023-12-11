<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity'
    ];
    public function totalPrice()
    {
        return $this->quantity * $this->product->price;
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
