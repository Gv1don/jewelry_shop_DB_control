<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakaz extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'product_id',
        'amount',
    ];
}
