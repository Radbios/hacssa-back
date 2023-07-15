<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyInventory extends Model
{
    use HasFactory;

    protected $table = "my_inventory";

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'sold'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
