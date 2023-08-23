<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategorias extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategoria',
        'categoria_id'
    ];

    public function registros(): HasMany
    {
        return $this->hasMany(Registros::class, 'subcategoria_id');
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categorias::class, 'categoria_id')->select(['id', 'categoria']);
    }


}
