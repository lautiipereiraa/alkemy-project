<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'carrito_id',
        'cantidad',
        'importe'
    ];
}
