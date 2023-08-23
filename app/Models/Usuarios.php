<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'vision',
        'status',
        'pais_id',
        'curso_id'
    ];
    public function registros(): HasMany
    {
        return $this->hasMany(Registros::class, 'usuario_id')->select(
            'id',
            'meta_fecha',
            'que',
            'porque',
            'como',
            'cuando',
            'donde',
            'conquien',
            'costo',
            'usuario_id',
            'subcategoria_id'
        );
    }

    public function pais(): BelongsTo
    {
        return $this->belongsTo(Paises::class, 'pais_id')->select(['id', 'pais']);
    }

    public function curso(): BelongsTo
    {
        return $this->belongsTo(cursos::class, 'curso_id')->select(['id', 'curso']);
    }
}
