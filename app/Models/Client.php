<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'gender',
        'last_purchase_date',
        'total_purchase_amount'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
