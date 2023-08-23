<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Registros extends Model
{
    use HasFactory;

    protected $fillable = [
        'que',
        'porque',
        'como',
        'cuando',
        'donde',
        'conquien',
        'costo',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id');
    }

    public function subcategoria(): BelongsTo
    {
        return $this->belongsTo(Subcategorias::class, 'subcategoria_id')->select(['id', 'subcategoria', 'categoria_id']);
    }
}
