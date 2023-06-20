<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'gender',
        'last_purchase_date',
        'total_purchase_amount'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
