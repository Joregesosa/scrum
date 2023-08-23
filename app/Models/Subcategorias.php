<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategoria',
        'categoria_id'
    ];
}
