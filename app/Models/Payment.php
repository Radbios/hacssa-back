<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'value',
        'date',
        'confirm'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
