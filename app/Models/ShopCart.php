<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCart extends Model
{
    use HasFactory;

    protected $fillable = [
        "usuario_id",
        "importe",
        "fecha_creacion",
        "finalizado"
    ];
}
