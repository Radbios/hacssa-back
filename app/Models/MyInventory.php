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
        'inventory_id',
        'quantity',
        'sold'
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
